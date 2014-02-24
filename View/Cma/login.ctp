<?php
echo implode('', array(
	$this->Form->create(),
		$this->Form->input('datasource', array(
			'type' => 'select',
			'options' => array(
				'Database/Mysql' => 'MySQL',
			)
		)),
		$this->Form->input('encoding', array(
			'type' => 'select',
			'options' => array(
				'utf8' => 'UTF-8',
			)
		)),


		$this->Form->input('login', array(
			'placeholder' => 'root',
			'label' => __d('cma', 'Username'),
		)),
		$this->Form->input('password', array(
			'placeholder' => 'root',
			'label' => __d('cma', 'Password'),
		)),
		$this->Form->input('host', array(
			'placeholder' => 'localhost',
		)),
		$this->Form->input('port', array(
			'type' => 'number',
			'min' => 0,
			'max' => 65000,
			'placeholder' => 3036
		)),
		$this->Form->input('persistent', array(
			'type' => 'checkbox',
		)),
		$this->Form->submit('Login'),
	$this->Form->end(),
));