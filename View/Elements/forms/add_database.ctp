<?php
echo $this->Html->tag('div', implode('', array(
	$this->Html->tag('h2', 'Create a new database'),
	$this->Form->create('CmaDatabase', array(
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
		$this->Form->input('database_name'),
		$this->Form->input('collation', array(
			'type' => 'select',
			'options' => $collations,
			'empty' => __d('cma', 'Server Default'),
		)),
		$this->Form->submit(__d('cma', 'Go'), array(
			'class' => 'btn btn-default pull-right',
			'div' => false,
		)),
	$this->Form->end(),
)), array('class' => 'jumbotron hidden-print'));