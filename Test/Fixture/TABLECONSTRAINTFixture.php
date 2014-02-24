<?php
/**
 * TABLECONSTRAINTFixture
 *
 */
class TABLECONSTRAINTFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'TABLE_CONSTRAINTS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CONSTRAINT_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CONSTRAINT_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CONSTRAINT_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CONSTRAINT_TYPE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'CONSTRAINT_CATALOG' => 'Lorem ipsum dolor sit amet',
			'CONSTRAINT_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'CONSTRAINT_NAME' => 'Lorem ipsum dolor sit amet',
			'TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'CONSTRAINT_TYPE' => 'Lorem ipsum dolor sit amet'
		),
	);

}
