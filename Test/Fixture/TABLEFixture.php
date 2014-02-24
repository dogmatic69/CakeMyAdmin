<?php
/**
 * TABLEFixture
 *
 */
class TABLEFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'TABLES';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_TYPE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ENGINE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'VERSION' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'ROW_FORMAT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_ROWS' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'AVG_ROW_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'DATA_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'MAX_DATA_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'INDEX_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'DATA_FREE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'AUTO_INCREMENT' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'CREATE_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'UPDATE_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'CHECK_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'TABLE_COLLATION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHECKSUM' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'CREATE_OPTIONS' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_COMMENT' => array('type' => 'string', 'null' => false, 'length' => 2048, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'TABLE_CATALOG' => 'Lorem ipsum dolor sit amet',
			'TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'TABLE_TYPE' => 'Lorem ipsum dolor sit amet',
			'ENGINE' => 'Lorem ipsum dolor sit amet',
			'VERSION' => '',
			'ROW_FORMAT' => 'Lorem ip',
			'TABLE_ROWS' => '',
			'AVG_ROW_LENGTH' => '',
			'DATA_LENGTH' => '',
			'MAX_DATA_LENGTH' => '',
			'INDEX_LENGTH' => '',
			'DATA_FREE' => '',
			'AUTO_INCREMENT' => '',
			'CREATE_TIME' => '2014-02-21 20:52:09',
			'UPDATE_TIME' => '2014-02-21 20:52:09',
			'CHECK_TIME' => '2014-02-21 20:52:09',
			'TABLE_COLLATION' => 'Lorem ipsum dolor sit amet',
			'CHECKSUM' => '',
			'CREATE_OPTIONS' => 'Lorem ipsum dolor sit amet',
			'TABLE_COMMENT' => 'Lorem ipsum dolor sit amet'
		),
	);

}
