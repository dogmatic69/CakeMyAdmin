<?php
if (empty($databaseList)) {
	return;
}

$currentDatabase = !empty($this->request->params['database']) ? $this->request->params['database'] : null;
$currentTable = !empty($this->request->params['table']) ? $this->request->params['table'] : null;

$links = array_filter(array(
	$this->Html->tag('li', $this->Cma->home()),
	!$currentDatabase ? null : $this->Html->tag('li', $this->Cma->database($currentDatabase), array('class' => !$currentTable ? 'active' : null)),
	!$currentTable ? null : $this->Html->tag('li', $this->Cma->table($currentDatabase, $currentTable), array('class' => 'active')),
));

if (count($links) > 1) {
	echo $this->Html->tag('ol', implode('', $links), array(
		'class' => 'breadcrumb',
	));
}

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
foreach ($databaseList as &$database) {
	foreach ($database['Table'] as &$table) {
		$niceTableName = Inflector::classify($table['Name']);
		if (!preg_match('/a-z/', $table['Name'])) {
			$niceTableName = Inflector::classify(strtolower($table['Name']));
		}

		$table['Name'] = implode(' ', array(
			$this->Html->tag('div', implode('', array(
				$this->Cma->browse($database['CmaSchemata']['name'], $table['Name']),
				$this->Cma->structure($database['CmaSchemata']['name'], $table['Name']),
				$this->Cma->rowCountButton($table['Rows']),
			)), array('class' => 'btn-group btn-group-xs')),
			$currentTable == $table['Name'] ? $this->Html->tag('strong', $niceTableName) : $niceTableName,
			$this->Html->tag('span', implode(' ', array(
				$table['Name'],
				strtolower($table['Name']),
				strtoupper($table['Name']),
			)), array('class' => 'hidden')),
		));
		$table = $this->Html->link($table['Name'], array(

		), array('escape' => false));
	}


	if (empty($database['Table'])) {
		$database['Table'] = array(__d('cma', 'No Tables Found'));
	}

	$searchBox = $this->Form->input('filter', array(
		'placeholder' => 'Filter table names',
		'div' => false,
		'label' => false,
		'id' => String::uuid(),
		'class' => 'table-filter',
		'data-target' => Inflector::slug($database['CmaSchemata']['name']),
	));


	$panelClass = $currentDatabase == $database['CmaSchemata']['name'] ? 'in' : null;
	$database = $this->Html->tag('div', implode('', array(
		$this->Html->tag('div', implode('', array(
			$this->Html->tag('h4', $this->Html->link(Inflector::classify($database['CmaSchemata']['name']), '#' . Inflector::slug($database['CmaSchemata']['name']), array(
				'data-toggle' => 'collapse',
				'data-parent' => '#databaseList',
			)), array('class' => 'panel-title')),
		)), array('class' => 'panel-heading')),
		$this->Html->tag('div', implode('', array(
			$this->Html->tag('div', implode('', array(
				count($database['Table']) > 1 ? $searchBox : '',
				$this->Html->nestedList($database['Table'], array('class' => 'list-unstyled tables'))
			)), array('class' => 'panel-body'))
		)), array('id' => Inflector::slug($database['CmaSchemata']['name']), 'class' => 'panel-collapse collapse ' . $panelClass)),
	)), array('class' => 'panel panel-default'));
}

echo $this->Html->tag('div', implode('', $databaseList), array('class' => 'panel-group', 'id' => 'databaseList'));