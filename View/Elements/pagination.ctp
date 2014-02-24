<?php
$url = array_filter(array(
	'database' => !empty($this->request->params['database']) ? $this->request->params['database'] : null,
	'table' => !empty($this->request->params['table']) ? $this->request->params['table'] : null,
));
$this->Paginator->options(array('url' => $url));

echo $this->Paginator->pagination(array(
	'ul' => 'pagination hidden-print',
));

if (!isset($limitSelect) || $limitSelect !== false) {
	$limit = !empty($this->request->params['named']['limit']) ? $this->request->params['named']['limit'] : 20;
	
	$list = array();
	foreach (array(10, 20, 50, 100) as $range) {
		$list[] = $this->Html->tag('li', $this->Html->link($range, array('limit' => $range) + $url), array(
			'class' => $range == $limit ? 'current disabled' : ''
		));
	}
	echo $this->Html->tag('ul', implode('', $list), array('class' => 'pagination pull-right hidden-print'));
}