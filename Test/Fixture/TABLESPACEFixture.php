<?php
/**
 * TABLESPACEFixture
 *
 */
class TABLESPACEFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'TABLESPACES';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TABLESPACE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ENGINE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLESPACE_TYPE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'LOGFILE_GROUP_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXTENT_SIZE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'AUTOEXTEND_SIZE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'MAXIMUM_SIZE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'NODEGROUP_ID' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'TABLESPACE_COMMENT' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2048, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'TABLESPACE_NAME' => 'Lorem ipsum dolor sit amet',
			'ENGINE' => 'Lorem ipsum dolor sit amet',
			'TABLESPACE_TYPE' => 'Lorem ipsum dolor sit amet',
			'LOGFILE_GROUP_NAME' => 'Lorem ipsum dolor sit amet',
			'EXTENT_SIZE' => '',
			'AUTOEXTEND_SIZE' => '',
			'MAXIMUM_SIZE' => '',
			'NODEGROUP_ID' => '',
			'TABLESPACE_COMMENT' => 'Lorem ipsum dolor sit amet'
		),
	);

}
