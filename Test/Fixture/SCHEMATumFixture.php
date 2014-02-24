<?php
/**
 * SCHEMATumFixture
 *
 */
class SCHEMATumFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'SCHEMATA';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CATALOG_NAME' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SCHEMA_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DEFAULT_CHARACTER_SET_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DEFAULT_COLLATION_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SQL_PATH' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'CATALOG_NAME' => 'Lorem ipsum dolor sit amet',
			'SCHEMA_NAME' => 'Lorem ipsum dolor sit amet',
			'DEFAULT_CHARACTER_SET_NAME' => 'Lorem ipsum dolor sit amet',
			'DEFAULT_COLLATION_NAME' => 'Lorem ipsum dolor sit amet',
			'SQL_PATH' => 'Lorem ipsum dolor sit amet'
		),
	);

}
