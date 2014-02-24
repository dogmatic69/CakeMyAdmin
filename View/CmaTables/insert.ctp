<?php
echo $this->Form->create('', array(
	'inputDefaults' => array(
		'div' => 'col-sm-11',
		'class' => 'form-control',
		'label' => false,
	),
	'class' => 'form-horizontal',
));
foreach($schema as $field => $options) {
	$inputOptions = array();
	if ($options['key'] == 'primary') {
		$inputOptions = array_merge($inputOptions, array(
			'readonly' => true,
			'placeholder' => __d('cma', 'Auto Increment | UUID()'),
		));
	}

	if (in_array($options['field_name'], array('created', 'modified', 'update')) && $options['type'] == 'datetime' && $options['null']) {
		$inputOptions = array_merge(array(
			'placeholder' => __d('cma', 'Leave blank to auto populate'),
		), $inputOptions);
	}

	if (substr($options['field_name'], -6) == '_count') {
		$inputOptions = array_merge(array(
			'placeholder' => __d('cma', 'Counter cache fields update automatically.'),
		), $inputOptions);
	}
	echo $this->Html->tag('div', implode('', array(
		$this->Form->label($options['field_name'], null, array(
			'class' => 'col-sm-1 control-label',
		)),
		$this->Form->input($options['field_name'], $inputOptions),
	)), array('class' => 'form-group'));
}
echo $this->Form->submit(__d('cma', 'Insert'));
echo $this->Form->end();