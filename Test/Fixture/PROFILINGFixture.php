<?php
/**
 * PROFILINGFixture
 *
 */
class PROFILINGFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'PROFILING';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'QUERY_ID' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
		'SEQ' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
		'STATE' => array('type' => 'string', 'null' => false, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DURATION' => array('type' => 'float', 'null' => false, 'default' => '0.000000', 'length' => '9,6'),
		'CPU_USER' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '9,6'),
		'CPU_SYSTEM' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '9,6'),
		'CONTEXT_VOLUNTARY' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'CONTEXT_INVOLUNTARY' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'BLOCK_OPS_IN' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'BLOCK_OPS_OUT' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'MESSAGES_SENT' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'MESSAGES_RECEIVED' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'PAGE_FAULTS_MAJOR' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'PAGE_FAULTS_MINOR' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'SWAPS' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
		'SOURCE_FUNCTION' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SOURCE_FILE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SOURCE_LINE' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 20),
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
			'QUERY_ID' => 1,
			'SEQ' => 1,
			'STATE' => 'Lorem ipsum dolor sit amet',
			'DURATION' => 1,
			'CPU_USER' => 1,
			'CPU_SYSTEM' => 1,
			'CONTEXT_VOLUNTARY' => 1,
			'CONTEXT_INVOLUNTARY' => 1,
			'BLOCK_OPS_IN' => 1,
			'BLOCK_OPS_OUT' => 1,
			'MESSAGES_SENT' => 1,
			'MESSAGES_RECEIVED' => 1,
			'PAGE_FAULTS_MAJOR' => 1,
			'PAGE_FAULTS_MINOR' => 1,
			'SWAPS' => 1,
			'SOURCE_FUNCTION' => 'Lorem ipsum dolor sit amet',
			'SOURCE_FILE' => 'Lorem ipsum dolor ',
			'SOURCE_LINE' => 1
		),
	);

}
