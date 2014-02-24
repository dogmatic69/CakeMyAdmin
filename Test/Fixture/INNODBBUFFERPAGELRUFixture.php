<?php
/**
 * INNODBBUFFERPAGELRUFixture
 *
 */
class INNODBBUFFERPAGELRUFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'INNODB_BUFFER_PAGE_LRU';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'POOL_ID' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'LRU_POSITION' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'SPACE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PAGE_NUMBER' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PAGE_TYPE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FLUSH_TYPE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'FIX_COUNT' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'IS_HASHED' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NEWEST_MODIFICATION' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'OLDEST_MODIFICATION' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'ACCESS_TIME' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'TABLE_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INDEX_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NUMBER_RECORDS' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'DATA_SIZE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'COMPRESSED_SIZE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'COMPRESSED' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IO_FIX' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IS_OLD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'FREE_PAGE_CLOCK' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
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
			'POOL_ID' => '',
			'LRU_POSITION' => '',
			'SPACE' => '',
			'PAGE_NUMBER' => '',
			'PAGE_TYPE' => 'Lorem ipsum dolor sit amet',
			'FLUSH_TYPE' => '',
			'FIX_COUNT' => '',
			'IS_HASHED' => 'L',
			'NEWEST_MODIFICATION' => '',
			'OLDEST_MODIFICATION' => '',
			'ACCESS_TIME' => '',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'INDEX_NAME' => 'Lorem ipsum dolor sit amet',
			'NUMBER_RECORDS' => '',
			'DATA_SIZE' => '',
			'COMPRESSED_SIZE' => '',
			'COMPRESSED' => 'L',
			'IO_FIX' => 'Lorem ipsum dolor sit amet',
			'IS_OLD' => 'L',
			'FREE_PAGE_CLOCK' => ''
		),
	);

}
