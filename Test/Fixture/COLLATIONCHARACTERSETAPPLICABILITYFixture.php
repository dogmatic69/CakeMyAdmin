<?php
/**
 * COLLATIONCHARACTERSETAPPLICABILITYFixture
 *
 */
class COLLATIONCHARACTERSETAPPLICABILITYFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'COLLATION_CHARACTER_SET_APPLICABILITY';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'COLLATION_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHARACTER_SET_NAME' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'CHARACTER_SET_NAME' => 'Lorem ipsum dolor sit amet'
		),
	);

}
