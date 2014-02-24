<?php
/**
 * COLLATIONFixture
 *
 */
class COLLATIONFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'COLLATIONS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'COLLATION_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHARACTER_SET_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ID' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 11),
		'IS_DEFAULT' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IS_COMPILED' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SORTLEN' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 3),
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
			'COLLATION_NAME' => 'Lorem ipsum dolor sit amet',
			'CHARACTER_SET_NAME' => 'Lorem ipsum dolor sit amet',
			'ID' => '',
			'IS_DEFAULT' => 'L',
			'IS_COMPILED' => 'L',
			'SORTLEN' => ''
		),
	);

}
