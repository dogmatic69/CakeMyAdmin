<?php
/**
 * INNODBLOCKFixture
 *
 */
class INNODBLOCKFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'INNODB_LOCKS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'lock_id' => array('type' => 'string', 'null' => false, 'length' => 81, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lock_trx_id' => array('type' => 'string', 'null' => false, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lock_mode' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lock_type' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lock_table' => array('type' => 'string', 'null' => false, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lock_index' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lock_space' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'lock_page' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'lock_rec' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'lock_data' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8192, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'lock_id' => 'Lorem ipsum dolor sit amet',
			'lock_trx_id' => 'Lorem ipsum dolo',
			'lock_mode' => 'Lorem ipsum dolor sit amet',
			'lock_type' => 'Lorem ipsum dolor sit amet',
			'lock_table' => 'Lorem ipsum dolor sit amet',
			'lock_index' => 'Lorem ipsum dolor sit amet',
			'lock_space' => '',
			'lock_page' => '',
			'lock_rec' => '',
			'lock_data' => 'Lorem ipsum dolor sit amet'
		),
	);

}
