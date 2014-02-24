<?php
/**
 * INNODBTRXFixture
 *
 */
class INNODBTRXFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'INNODB_TRX';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'trx_id' => array('type' => 'string', 'null' => false, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trx_state' => array('type' => 'string', 'null' => false, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trx_started' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'trx_requested_lock_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 81, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trx_wait_started' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'trx_weight' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_mysql_thread_id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_query' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trx_operation_state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trx_tables_in_use' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_tables_locked' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_lock_structs' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_lock_memory_bytes' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_rows_locked' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_rows_modified' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_concurrency_tickets' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'trx_isolation_level' => array('type' => 'string', 'null' => false, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trx_unique_checks' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'trx_foreign_key_checks' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'trx_last_foreign_key_error' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trx_adaptive_hash_latched' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'trx_adaptive_hash_timeout' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
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
			'trx_id' => 'Lorem ipsum dolo',
			'trx_state' => 'Lorem ipsum',
			'trx_started' => '2014-02-21 20:52:05',
			'trx_requested_lock_id' => 'Lorem ipsum dolor sit amet',
			'trx_wait_started' => '2014-02-21 20:52:05',
			'trx_weight' => '',
			'trx_mysql_thread_id' => '',
			'trx_query' => 'Lorem ipsum dolor sit amet',
			'trx_operation_state' => 'Lorem ipsum dolor sit amet',
			'trx_tables_in_use' => '',
			'trx_tables_locked' => '',
			'trx_lock_structs' => '',
			'trx_lock_memory_bytes' => '',
			'trx_rows_locked' => '',
			'trx_rows_modified' => '',
			'trx_concurrency_tickets' => '',
			'trx_isolation_level' => 'Lorem ipsum do',
			'trx_unique_checks' => 1,
			'trx_foreign_key_checks' => 1,
			'trx_last_foreign_key_error' => 'Lorem ipsum dolor sit amet',
			'trx_adaptive_hash_latched' => 1,
			'trx_adaptive_hash_timeout' => ''
		),
	);

}
