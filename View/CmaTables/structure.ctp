<?php
$Html = $this->Html;
array_walk($schema, function(&$k) use ($Html, $displayField, $indexes) {
	$fieldName = $k['field_name'];

	$primary = $k['key'] == 'primary';
	$isDisplayField = $k['field_name'] == $displayField;
	$isIndexed = in_array($k['field_name'], Hash::extract($indexes, '{s}.column'));
	$k['info'] = $Html->tag('div', implode('', array(
		$Html->link($Html->tag('span', '', array('class' => 'glyphicon glyphicon-flash')), '#', array(
			'escape' => false,
			'class' => $primary ? 'btn btn-info' : 'btn btn-default',
			'title' => $primary ? __d('cma', 'Primary Key') : null,
		)),
		$Html->link($Html->tag('span', '', array('class' => 'glyphicon glyphicon-eye-open')), '#', array(
			'escape' => false,
			'class' => $isDisplayField ? 'btn btn-info' : 'btn btn-default',
			'title' => $isDisplayField ? __d('cma', 'Display Field') : null,
		)),
		$Html->link($Html->tag('span', '', array('class' => 'glyphicon glyphicon-screenshot')), '#', array(
			'escape' => false,
			'class' => $isIndexed ? 'btn btn-info' : 'btn btn-default',
			'title' => $isIndexed ? __d('cma', 'Indexed Field') : null,
		)),
	)), array('class' => 'btn-group btn-group-xs '));

	$k['actions'] = array(
		$Html->tag('div', implode('', array(
			$Html->link(__d('cma', 'View'), array('action' => 'tables', $fieldName), array('class' => 'btn btn-default')),
			$Html->link(__d('cma', 'Edit'), array('action' => 'edit', $fieldName), array('class' => 'btn btn-default')),
			$Html->link(__d('cma', 'Drop'), array('action' => 'drop_database', $fieldName), array('class' => 'btn btn-danger')),
		)), array('class' => 'btn-group btn-group-xs ')),
		array('class' => 'hidden-print'),
	);

	$k['field_name'] = implode('', array(
		$Html->link($k['field_name'], array('action' => 'tables', $fieldName), array('class' => 'hidden-print')),
		$Html->tag('span', $k['field_name'], array('class' => 'visible-print')),
	));

	unset($k['key']);
});

$headers = array_keys($schema[0]);
array_walk($headers, function(&$field) {
	if ($field == 'actions') {
		$field = array(Inflector::humanize($field) => array('class' => 'hidden-print'));
		return;
	}
	$field = Inflector::humanize($field);
});

echo $this->Html->tag('table', implode('', array(
	$this->Html->tableHeaders($headers),
	$this->Html->tableCells($schema),
)), array('class' => 'table table-striped table-bordered table-hover'));