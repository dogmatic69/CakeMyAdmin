<?php
$fields = Hash::extract($databaseList, '{n}.CmaSchemata');
$Html = $this->Html;
array_walk($fields, function(&$k) use ($Html) {
	$databaseName = $k['name'];

	$k['name'] = implode('', array(
		$Html->link(Inflector::classify($k['name']), array('controller' => 'cma_tables', 'action' => 'index', 'database' => $databaseName), array(
			'title' => $k['name'],
			'class' => 'hidden-print'
		)),
		$Html->tag('span', Inflector::classify($k['name']), array('class' => 'visible-print')),
	));

	$k['actions'] = array(
		$Html->tag('div', implode('', array(
			$Html->link(__d('cma', 'View'), array('controller' => 'cma_tables', 'action' => 'index', 'database' => $databaseName), array('class' => 'btn btn-xs btn-default')),
			$Html->link(__d('cma', 'Edit'), array('action' => 'edit', $databaseName), array('class' => 'btn btn-xs btn-default')),
			$Html->link(__d('cma', 'Privileges'), array('action' => 'privileges', $databaseName), array('class' => 'btn btn-xs btn-default')),
			$Html->link(__d('cma', 'Drop'), array('action' => 'delete', $databaseName), array('class' => 'btn btn-xs btn-danger')),
		)), array('class' => 'btn-group')),
		array('class' => 'hidden-print'),
	);
});

$headers = array_keys($fields[0]);
array_walk($headers, function(&$field) {
	if ($field == 'actions') {
		$field = array(Inflector::humanize($field) => array('class' => 'hidden-print'));
		return;
	}
	$field = Inflector::humanize($field);
});

echo $this->Html->tag('table', implode('', array(
	$this->Html->tableHeaders($headers),
	$this->Html->tableCells($fields),
)), array('class' => 'table table-striped table-bordered table-hover'));

echo $this->element('Cma.forms/add_database');