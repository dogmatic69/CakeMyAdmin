<?php
/**
 * INNODBBUFFERPOOLSTATFixture
 *
 */
class INNODBBUFFERPOOLSTATFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'INNODB_BUFFER_POOL_STATS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'POOL_ID' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'POOL_SIZE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'FREE_BUFFERS' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'DATABASE_PAGES' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'OLD_DATABASE_PAGES' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'MODIFIED_DATABASE_PAGES' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PENDING_DECOMPRESS' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PENDING_READS' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PENDING_FLUSH_LRU' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PENDING_FLUSH_LIST' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PAGES_MADE_YOUNG' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PAGES_NOT_MADE_YOUNG' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PAGES_MADE_YOUNG_RATE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'PAGES_MADE_NOT_YOUNG_RATE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'NUMBER_PAGES_READ' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'NUMBER_PAGES_CREATED' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'NUMBER_PAGES_WRITTEN' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'PAGES_READ_RATE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'PAGES_CREATE_RATE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'PAGES_WRITTEN_RATE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'NUMBER_PAGES_GET' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'HIT_RATE' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'YOUNG_MAKE_PER_THOUSAND_GETS' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'NOT_YOUNG_MAKE_PER_THOUSAND_GETS' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'NUMBER_PAGES_READ_AHEAD' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'NUMBER_READ_AHEAD_EVICTED' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'READ_AHEAD_RATE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'READ_AHEAD_EVICTED_RATE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'LRU_IO_TOTAL' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'LRU_IO_CURRENT' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'UNCOMPRESS_TOTAL' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'UNCOMPRESS_CURRENT' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
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
			'POOL_SIZE' => '',
			'FREE_BUFFERS' => '',
			'DATABASE_PAGES' => '',
			'OLD_DATABASE_PAGES' => '',
			'MODIFIED_DATABASE_PAGES' => '',
			'PENDING_DECOMPRESS' => '',
			'PENDING_READS' => '',
			'PENDING_FLUSH_LRU' => '',
			'PENDING_FLUSH_LIST' => '',
			'PAGES_MADE_YOUNG' => '',
			'PAGES_NOT_MADE_YOUNG' => '',
			'PAGES_MADE_YOUNG_RATE' => 1,
			'PAGES_MADE_NOT_YOUNG_RATE' => 1,
			'NUMBER_PAGES_READ' => '',
			'NUMBER_PAGES_CREATED' => '',
			'NUMBER_PAGES_WRITTEN' => '',
			'PAGES_READ_RATE' => 1,
			'PAGES_CREATE_RATE' => 1,
			'PAGES_WRITTEN_RATE' => 1,
			'NUMBER_PAGES_GET' => '',
			'HIT_RATE' => '',
			'YOUNG_MAKE_PER_THOUSAND_GETS' => '',
			'NOT_YOUNG_MAKE_PER_THOUSAND_GETS' => '',
			'NUMBER_PAGES_READ_AHEAD' => '',
			'NUMBER_READ_AHEAD_EVICTED' => '',
			'READ_AHEAD_RATE' => 1,
			'READ_AHEAD_EVICTED_RATE' => 1,
			'LRU_IO_TOTAL' => '',
			'LRU_IO_CURRENT' => '',
			'UNCOMPRESS_TOTAL' => '',
			'UNCOMPRESS_CURRENT' => ''
		),
	);

}
