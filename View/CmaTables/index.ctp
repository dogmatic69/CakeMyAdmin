<?php

$Html = $this->Html;

$totals = array(
	'Comment' => null,
	'Create_time' => null,
	'Auto_increment' => null,
);
if (!empty($tables['Table'])) {
	$totals = array_fill_keys(array_keys($tables['Table'][0]), null);
}


foreach (array('Avg_row_length', 'Data_length', 'Max_data_length', 'Index_length', 'Rows') as $field) {
	$totals[$field] = array_sum(Hash::extract($tables['Table'], '{n}.' . $field));
}
$totals['Name'] = __d('cma', 'Totals');
$tables['Table'][] = $totals;
array_walk($tables['Table'], function(&$k) use ($Html, &$totals, $database) {
	$tableName = $k['Name'];
	$url = array('database' => $database, 'table' => $tableName);
	if ($k['Name'] != 'Totals') {
		$k['Name'] = implode('', array(
			$Html->link(Inflector::classify($k['Name']), $url + array('action' => 'browse'), array(
				'title' => implode(' :: ', array_filter(array($k['Name'], $k['Comment']))),
				'class' => 'hidden-print',
			)),
			$Html->tag('span', Inflector::classify($k['Name']), array('class' => 'visible-print')),
		));
	}
	$k['Create_time'] = $Html->tag('span', CakeTime::timeAgoInWords($k['Create_time']), array(
		'title' => $k['Create_time'],
	));
	$k['Auto_increment'] = $k['Auto_increment'] ?: '-';

	foreach (array('Avg_row_length', 'Data_length', 'Max_data_length', 'Index_length', 'Data_free') as $field) {
		if (empty($k[$field])) {
			$k[$field] = '-';
			continue;
		}
		$k[$field] = CakeNumber::toReadableSize($k[$field]);
	}

	$k['Size'] = $Html->tag('span', $k['Data_length'], array(
		'title' => __d('cma', 'Max data length %s :: Average row length %s', $k['Max_data_length'], $k['Avg_row_length']),
	));
	$k['Index'] = $k['Index_length'];
	$k['AI'] = $k['Auto_increment'];

	if (!$k['Rows']) {
		$k['Rows'] = '-';
	} elseif ($k['Engine'] == 'InnoDB') {
		$k['Rows'] = $this->Html->tag('span', '~' . $k['Rows'], array(
			'title' => __d('cma', 'InnoDB row count is only an estimate and could be upto 50% off'),
		));
	}
	unset($k['Checksum'], $k['Comment'], $k['Create_options'], $k['Max_data_length'], $k['Check_time'], $k['Update_time'], $k['Index_length'], $k['Version'], $k['Auto_increment'], $k['Avg_row_length'], $k['Row_format'], $k['Data_length']);

	$k['Actions'] = array(
		$Html->tag('div', implode('', array(
			$Html->link(__d('cma', 'Structure'), $url + array('action' => 'structure'), array('class' => 'btn btn-xs btn-default')),
			$Html->link(__d('cma', 'Browse'), $url + array('action' => 'browse'), array('class' => 'btn btn-xs btn-default')),
			$Html->link(__d('cma', 'Insert'), $url + array('action' => 'insert'), array('class' => 'btn btn-xs btn-default')),
			$Html->link(__d('cma', 'Truncate'), $url + array('action' => 'truncate'), array('class' => 'btn btn-xs btn-default')),
			$Html->link(__d('cma', 'Drop'), $url + array('action' => 'delete'), array('class' => 'btn btn-xs btn-danger')),
		)), array('class' => 'btn-group')),
		array('class' => 'hidden-print'),
	);
	$order = array(
		'Name' => null,
		'Actions' => null,
		'Rows' => null,
		'Engine' => null,
		'Collation' => null,
		'Index' => null,
		'AI' => null,
		'Size' => null,
	);
	$k = array_merge($order, $k);
	$totals = array_merge($order, $totals);
});
$tables['Table'][count($tables['Table']) - 1] = array_merge($tables['Table'][count($tables['Table']) - 1], array(
	'Actions' => '',
	'AI' => '',
	'Create_time' => '',
));

$headers = array_keys($tables['Table'][0]);

array_walk($headers, function(&$field) {
	if ($field == 'Actions') {
		$field = array(Inflector::humanize($field) => array('class' => 'hidden-print'));
		return;
	}
	$field = Inflector::humanize($field);
});

echo $this->Html->tag('table', implode('', array(
	$this->Html->tableHeaders($headers),
	$this->Html->tableCells($tables['Table']),
)), array('class' => 'table table-striped table-bordered table-hover'));

echo $this->element('Cma.forms/add_table_pre', compact('database'));