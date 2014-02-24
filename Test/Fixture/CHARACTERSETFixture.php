<?php
/**
 * CHARACTERSETFixture
 *
 */
class CHARACTERSETFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'CHARACTER_SETS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CHARACTER_SET_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DEFAULT_COLLATE_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DESCRIPTION' => array('type' => 'string', 'null' => false, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'MAXLEN' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 3),
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
			'CHARACTER_SET_NAME' => 'Lorem ipsum dolor sit amet',
			'DEFAULT_COLLATE_NAME' => 'Lorem ipsum dolor sit amet',
			'DESCRIPTION' => 'Lorem ipsum dolor sit amet',
			'MAXLEN' => ''
		),
	);

}
