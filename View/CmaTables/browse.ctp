<?php
$icon = $this->Html->tag('span', '', array('class' => 'glyphicon glyphicon-%s'));
$icons = array(
	'list' => sprintf($icon, 'th-list'),
	'structure' => sprintf($icon, 'list-alt'),
	'edit' => sprintf($icon, 'edit'),
	'delete' => sprintf($icon, 'trash'),
	'insert' => sprintf($icon, 'floppy-open'),
	'true' => sprintf($icon, 'ok'),
	'false' => sprintf($icon, 'remove'),
);

$dateFields = array();
foreach ($schema as $field => $config) {
	if ($config['type'] == 'datetime') {
		$dateFields[] = $field;
	}
}

$Html = $this->Html;
array_walk($data, function(&$k) use ($Html, $alias, $table, $primaryKey, $displayField, $belongsTo, $icons, $dateFields) {
	foreach ($belongsTo as $relation) {
		$relation = $k[$relation];
		if ($relation[$relation['==displayField']]) {
			$k[$alias][$relation['==foreignKey']] = implode('', array(
				$Html->link($relation[$relation['==displayField']], array(
					'action' => 'edit',
					'table' => $relation['==table'], 
					$relation[$relation['==primaryKey']]
				)),
				$Html->tag('div', implode('', array(
					$Html->link($icons['edit'], 
						array('action' => 'edit', 'table' => $relation['==table'], $relation[$relation['==primaryKey']]), 
						array('escape' => false, 'class' => 'btn btn-default', 'title' => __d('cma', 'Edit Record'))),
					$Html->link($icons['list'], array($relation['==table']), array('escape' => false, 'class' => 'btn btn-default', 'title' => __d('cma', 'Browse Data'))),
					$Html->link($icons['structure'], array($relation['==table'], 'action' => 'structure'), array('escape' => false, 'class' => 'btn btn-default', 'title' => __d('cma', 'View Structure'))),
				)), array('class' => 'btn-group btn-group-xs pull-right'))
			));
		} else {
			$k[$alias][$relation['==foreignKey']] = sprintf('-- %s --', __d('cma', 'Not Linked'));
		}
	}

	if ($displayField) {
		$k[$alias] = array_merge(array(
			$displayField => null,
			$primaryKey => null,
		), $k[$alias]);
	}

	$k[$alias][__d('cma', 'Actions')] = $Html->tag('div', implode('', array(
		$Html->link($icons['edit'] . __d('cma', 'Edit'), array(
			'action' => 'edit', 
			'table' => $table, 
			!empty($k[$alias][$primaryKey]) ? $k[$alias][$primaryKey] : null,
		), array('class' => 'btn btn-xs btn-default', 'escape' => false)),
		$Html->link($icons['delete'], array(
			'action' => 'delete', 
			'table' => $table, 
			!empty($k[$alias][$primaryKey]) ? $k[$alias][$primaryKey] : null,
		), array('class' => 'btn btn-xs btn-danger', 'escape' => false, 'title' => __d('cma', 'Delete record'))),
	)), array('class' => 'btn-group'));

	foreach ($k[$alias] as $key => &$_fieldCheck) {
		if (in_array(substr($_fieldCheck, 0, 1), array('{', '[')) && @json_decode($_fieldCheck)) {
			$_fieldCheck = $Html->tag('span', '{..JSON..}', array(
				'data-content' => $_fieldCheck,
			));
		} elseif (@unserialize($_fieldCheck) !== false || $_fieldCheck == 'b:0;') {
			$_fieldCheck = $Html->tag('span', '{..SERIALIZED..}', array(
				'data-content' => $_fieldCheck,
			));
		} elseif ($_fieldCheck === null) {
			$_fieldCheck = 'NULL';
		} elseif ($_fieldCheck === '') {
			$_fieldCheck = '- EMPTY -';
		} elseif ($_fieldCheck === false) {
			$_fieldCheck = $icons['false'];
		} elseif ($_fieldCheck === true) {
			$_fieldCheck = $icons['true'];
		} elseif (in_array($key, $dateFields)) {
			$_fieldCheck = $Html->tag('span', CakeTime::niceShort($_fieldCheck), array(
				'data-content' => $_fieldCheck,
			));
		} else {
			if ($key != $displayField) {
				$_fieldCheck = $Html->tag('span', String::truncate($_fieldCheck, 40, array('html' => true)), array(
					'data-content' => $_fieldCheck,
				));
			} else {
				$_fieldCheck = String::truncate($_fieldCheck, 40, array('html' => true));
			}
		}
	}

	if ($displayField && $displayField != $primaryKey) {
		$k[$alias][$displayField] = $Html->link($k[$alias][$displayField], array('action' => 'edit', 'table' => $table, $k[$alias][$primaryKey]));
		unset($k[$alias][$primaryKey]);
	}
});

$headers = array_keys($data[0][$alias]);
array_walk($headers, function(&$field) use($schema) {
	if (in_array($field, array_keys($schema))) {
		$field = $this->Paginator->sort($field);
	}
});

echo $this->element('pagination');
echo $this->Html->tag('table', implode('', array(
	$this->Html->tableHeaders($headers),
	$this->Html->tableCells(Hash::extract($data, '{n}.' . $alias)),
)), array('class' => 'table table-striped table-bordered table-hover table-condensed', 'style' => 'font-size: 90%'));
echo $this->element('pagination', array('limitSelect' => false));