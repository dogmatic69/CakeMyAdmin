<?php
echo $this->Html->tag('div', implode('', array(
	$this->Form->button('&times;', array(
		'class' => 'close',
		'data-dismiss' => 'alert',
		'aria-hidden' => 'true',
	)),
	$this->Html->tag('strong', __d('cma', Inflector::humanize($type)) . '! '),
	$message,
)), array('class' => 'alert alert-dismissable alert-' . $type));