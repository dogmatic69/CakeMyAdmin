<?php
/**
 * GLOBALSTATUFixture
 *
 */
class GLOBALSTATUFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'GLOBAL_STATUS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'VARIABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'VARIABLE_VALUE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MEMORY')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'VARIABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'VARIABLE_VALUE' => 'Lorem ipsum dolor sit amet'
		),
	);

}
