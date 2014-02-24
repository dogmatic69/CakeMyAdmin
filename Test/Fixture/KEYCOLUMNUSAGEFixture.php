<?php
/**
 * KEYCOLUMNUSAGEFixture
 *
 */
class KEYCOLUMNUSAGEFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'KEY_COLUMN_USAGE';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CONSTRAINT_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CONSTRAINT_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CONSTRAINT_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLUMN_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ORDINAL_POSITION' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 10),
		'POSITION_IN_UNIQUE_CONSTRAINT' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 10),
		'REFERENCED_TABLE_SCHEMA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'REFERENCED_TABLE_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'REFERENCED_COLUMN_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'TABLE_CATALOG' => 'Lorem ipsum dolor sit amet',
			'TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'COLUMN_NAME' => 'Lorem ipsum dolor sit amet',
			'ORDINAL_POSITION' => '',
			'POSITION_IN_UNIQUE_CONSTRAINT' => '',
			'REFERENCED_TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'REFERENCED_TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'REFERENCED_COLUMN_NAME' => 'Lorem ipsum dolor sit amet'
		),
	);

}
