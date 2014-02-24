<?php
echo $this->Html->tag('div', implode('', array(
	$this->Html->tag('h1', __d('cma', 'CakeMyAdmin Dashboard')),
)), array('class' => 'jumbotron'));