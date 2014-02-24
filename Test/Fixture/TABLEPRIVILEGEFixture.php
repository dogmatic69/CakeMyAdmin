<?php
/**
 * TABLEPRIVILEGEFixture
 *
 */
class TABLEPRIVILEGEFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'TABLE_PRIVILEGES';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'GRANTEE' => array('type' => 'string', 'null' => false, 'length' => 81, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PRIVILEGE_TYPE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IS_GRANTABLE' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'GRANTEE' => 'Lorem ipsum dolor sit amet',
			'TABLE_CATALOG' => 'Lorem ipsum dolor sit amet',
			'TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'PRIVILEGE_TYPE' => 'Lorem ipsum dolor sit amet',
			'IS_GRANTABLE' => 'L'
		),
	);

}
