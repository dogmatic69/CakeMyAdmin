<?php
echo $this->Html->tag('h1', __d('cma', 'Create a new table %s', $this->Html->tag('small', Inflector::classify($this->request->data['CmaTable']['database']))));
$out = array(
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
	$this->Form->input('table_name'),
	$this->Html->link(__d('cma', 'Add Column'), '#', array(
		'class' => 'add-column btn btn-default',
	)),
);
		
foreach ($this->request->data['CmaField'] as $k => $fields) {
	foreach ($fields as $name => &$value) {
		$options = array(
			'placeholder' => __d('cma', Inflector::humanize($name)),
		);
		if (isset(${$name . '_config'})) {
			$options = Hash::merge($options, ${$name . '_config'});
		}

		$value = $this->Form->input('CmaField.' . $k . '.' . $name, $options);
	}
	$out[] = $this->Html->tag('div', $this->Html->tag('span', $k + 1, array('class' => 'btn btn-default disabled')) . implode('', $fields));
}
$out[] = implode('', array(
	$this->Form->submit(__d('cma', 'Save'), array(
		'class' => 'btn btn-default',
		'div' => false,
	)),
	$this->Form->end(),
));

echo implode('', $out);