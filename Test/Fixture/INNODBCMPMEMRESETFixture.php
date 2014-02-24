<?php
/**
 * INNODBCMPMEMRESETFixture
 *
 */
class INNODBCMPMEMRESETFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'INNODB_CMPMEM_RESET';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'page_size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5),
		'buffer_pool_instance' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'pages_used' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'pages_free' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'relocation_ops' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'relocation_time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
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
			'page_size' => 1,
			'buffer_pool_instance' => 1,
			'pages_used' => 1,
			'pages_free' => 1,
			'relocation_ops' => '',
			'relocation_time' => 1
		),
	);

}
