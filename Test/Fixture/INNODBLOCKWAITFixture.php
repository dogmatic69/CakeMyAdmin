<?php
/**
 * INNODBLOCKWAITFixture
 *
 */
class INNODBLOCKWAITFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'INNODB_LOCK_WAITS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'requesting_trx_id' => array('type' => 'string', 'null' => false, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'requested_lock_id' => array('type' => 'string', 'null' => false, 'length' => 81, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'blocking_trx_id' => array('type' => 'string', 'null' => false, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'blocking_lock_id' => array('type' => 'string', 'null' => false, 'length' => 81, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'requesting_trx_id' => 'Lorem ipsum dolo',
			'requested_lock_id' => 'Lorem ipsum dolor sit amet',
			'blocking_trx_id' => 'Lorem ipsum dolo',
			'blocking_lock_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
