<?php

// list all databases
Router::connect('/cma/databases', array('plugin' => 'cma', 'controller' => 'cma_databases', 'action' => 'index'), array(
	'database' => '[a-zA-Z0-9_-]+',
	'pass' => array('database'),
));

// list all tables in the selected database
Router::connect('/cma/database/:database', array('plugin' => 'cma', 'controller' => 'cma_tables', 'action' => 'index'), array(
	'database' => '[a-zA-Z0-9_-]+',
	'pass' => array('database'),
));

// browse, structure, edit etc a specific table in the selected database
Router::connect('/cma/tables/:database/:table/:action/*', array('plugin' => 'cma', 'controller' => 'cma_tables'), array(
	'database' => '[a-zA-Z0-9_-]+',
	'table' => '[a-zA-Z0-9_-]+',
	'action' => '[a-z_]+',
	'pass' => array('database', 'table', 'action'),
));