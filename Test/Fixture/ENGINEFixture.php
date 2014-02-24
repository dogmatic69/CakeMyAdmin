<?php
/**
 * ENGINEFixture
 *
 */
class ENGINEFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ENGINES';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ENGINE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SUPPORT' => array('type' => 'string', 'null' => false, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COMMENT' => array('type' => 'string', 'null' => false, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TRANSACTIONS' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'XA' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SAVEPOINTS' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'ENGINE' => 'Lorem ipsum dolor sit amet',
			'SUPPORT' => 'Lorem ',
			'COMMENT' => 'Lorem ipsum dolor sit amet',
			'TRANSACTIONS' => 'L',
			'XA' => 'L',
			'SAVEPOINTS' => 'L'
		),
	);

}
