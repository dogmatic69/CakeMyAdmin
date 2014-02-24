<?php
echo $this->Html->tag('div', implode('', array(
	$this->Html->tag('h2', 'Create a new table'),
	$this->Form->create('CmaTable', array(
		'inputDefaults' => array(
			'div' => 'form-group',
			'class' => 'form-control',
			'label' => array(
				'class' => 'sr-only',
			),
		),
		'class' => 'form-inline',
		'role' => 'form',
		'action' => 'add',
	)),
		$this->Form->hidden('_pre', array('value' => 1)),
		$this->Form->hidden('database', array(
			'value' => $database,
		)),
		$this->Form->input('table_name', array(
			'placeholder' => __d('cma', 'Table name'),
		)),
		$this->Form->input('columns', array(
			'type' => 'number',
			'placeholder' => __d('cma', 'Number of columns'),
		)),
		$this->Form->submit(__d('cma', 'Go'), array(
			'class' => 'btn btn-default pull-right',
			'div' => false,
		)),
	$this->Form->end(),
)), array('class' => 'jumbotron hidden-print'));