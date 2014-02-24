<?php
/**
 * REFERENTIALCONSTRAINTFixture
 *
 */
class REFERENTIALCONSTRAINTFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'REFERENTIAL_CONSTRAINTS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CONSTRAINT_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CONSTRAINT_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CONSTRAINT_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'UNIQUE_CONSTRAINT_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'UNIQUE_CONSTRAINT_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'UNIQUE_CONSTRAINT_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'MATCH_OPTION' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'UPDATE_RULE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DELETE_RULE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'REFERENCED_TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'CONSTRAINT_CATALOG' => 'Lorem ipsum dolor sit amet',
			'CONSTRAINT_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'CONSTRAINT_NAME' => 'Lorem ipsum dolor sit amet',
			'UNIQUE_CONSTRAINT_CATALOG' => 'Lorem ipsum dolor sit amet',
			'UNIQUE_CONSTRAINT_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'UNIQUE_CONSTRAINT_NAME' => 'Lorem ipsum dolor sit amet',
			'MATCH_OPTION' => 'Lorem ipsum dolor sit amet',
			'UPDATE_RULE' => 'Lorem ipsum dolor sit amet',
			'DELETE_RULE' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'REFERENCED_TABLE_NAME' => 'Lorem ipsum dolor sit amet'
		),
	);

}
