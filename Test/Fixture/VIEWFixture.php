<?php
/**
 * VIEWFixture
 *
 */
class VIEWFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'VIEWS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'VIEW_DEFINITION' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHECK_OPTION' => array('type' => 'string', 'null' => false, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IS_UPDATABLE' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DEFINER' => array('type' => 'string', 'null' => false, 'length' => 77, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SECURITY_TYPE' => array('type' => 'string', 'null' => false, 'length' => 7, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHARACTER_SET_CLIENT' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLLATION_CONNECTION' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'TABLE_CATALOG' => 'Lorem ipsum dolor sit amet',
			'TABLE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TABLE_NAME' => 'Lorem ipsum dolor sit amet',
			'VIEW_DEFINITION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'CHECK_OPTION' => 'Lorem ',
			'IS_UPDATABLE' => 'L',
			'DEFINER' => 'Lorem ipsum dolor sit amet',
			'SECURITY_TYPE' => 'Lorem',
			'CHARACTER_SET_CLIENT' => 'Lorem ipsum dolor sit amet',
			'COLLATION_CONNECTION' => 'Lorem ipsum dolor sit amet'
		),
	);

}
