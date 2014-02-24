<?php
/**
 * INNODBCMPRESETFixture
 *
 */
class INNODBCMPRESETFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'INNODB_CMP_RESET';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'page_size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5),
		'compress_ops' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'compress_ops_ok' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'compress_time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'uncompress_ops' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'uncompress_time' => array('type' => 'integer', 'null' => false, 'default' => '0'),
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
			'compress_ops' => 1,
			'compress_ops_ok' => 1,
			'compress_time' => 1,
			'uncompress_ops' => 1,
			'uncompress_time' => 1
		),
	);

}
