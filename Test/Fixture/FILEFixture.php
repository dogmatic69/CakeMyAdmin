<?php
/**
 * FILEFixture
 *
 */
class FILEFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'FILES';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'FILE_ID' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 4),
		'FILE_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FILE_TYPE' => array('type' => 'string', 'null' => false, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLESPACE_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LOGFILE_GROUP_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LOGFILE_GROUP_NUMBER' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 4),
		'ENGINE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FULLTEXT_KEYS' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DELETED_ROWS' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 4),
		'UPDATE_COUNT' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 4),
		'FREE_EXTENTS' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 4),
		'TOTAL_EXTENTS' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 4),
		'EXTENT_SIZE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 4),
		'INITIAL_SIZE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'MAXIMUM_SIZE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'AUTOEXTEND_SIZE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'CREATION_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'LAST_UPDATE_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'LAST_ACCESS_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'RECOVER_TIME' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 4),
		'TRANSACTION_COUNTER' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 4),
		'VERSION' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'ROW_FORMAT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_ROWS' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'AVG_ROW_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'DATA_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'MAX_DATA_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'INDEX_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'DATA_FREE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'CREATE_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'UPDATE_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'CHECK_TIME' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'CHECKSUM' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'STATUS' => array('type' => 'string', 'null' => false, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXTRA' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'FILE_ID' => '',
			'FILE_NAME' => 'Lorem ipsum dolor sit amet',
			'FILE_TYPE' => 'Lorem ipsum dolor ',
			'TABLESPACE_NAME' => 'Lorem ipsum dolor sit amet',
			'TABLE_CATALOG' => 'Lorem ipsum dolor sit amet',
			'TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'LOGFILE_GROUP_NAME' => 'Lorem ipsum dolor sit amet',
			'LOGFILE_GROUP_NUMBER' => '',
			'ENGINE' => 'Lorem ipsum dolor sit amet',
			'FULLTEXT_KEYS' => 'Lorem ipsum dolor sit amet',
			'DELETED_ROWS' => '',
			'UPDATE_COUNT' => '',
			'FREE_EXTENTS' => '',
			'TOTAL_EXTENTS' => '',
			'EXTENT_SIZE' => '',
			'INITIAL_SIZE' => '',
			'MAXIMUM_SIZE' => '',
			'AUTOEXTEND_SIZE' => '',
			'CREATION_TIME' => '2014-02-21 20:52:00',
			'LAST_UPDATE_TIME' => '2014-02-21 20:52:00',
			'LAST_ACCESS_TIME' => '2014-02-21 20:52:00',
			'RECOVER_TIME' => '',
			'TRANSACTION_COUNTER' => '',
			'VERSION' => '',
			'ROW_FORMAT' => 'Lorem ip',
			'TABLE_ROWS' => '',
			'AVG_ROW_LENGTH' => '',
			'DATA_LENGTH' => '',
			'MAX_DATA_LENGTH' => '',
			'INDEX_LENGTH' => '',
			'DATA_FREE' => '',
			'CREATE_TIME' => '2014-02-21 20:52:00',
			'UPDATE_TIME' => '2014-02-21 20:52:00',
			'CHECK_TIME' => '2014-02-21 20:52:00',
			'CHECKSUM' => '',
			'STATUS' => 'Lorem ipsum dolor ',
			'EXTRA' => 'Lorem ipsum dolor sit amet'
		),
	);

}
