<?php
/**
 * TRIGGERFixture
 *
 */
class TRIGGERFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'TRIGGERS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TRIGGER_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TRIGGER_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TRIGGER_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_MANIPULATION' => array('type' => 'string', 'null' => false, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_OBJECT_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_OBJECT_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_OBJECT_TABLE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_ORDER' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 4),
		'ACTION_CONDITION' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_STATEMENT' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_ORIENTATION' => array('type' => 'string', 'null' => false, 'length' => 9, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_TIMING' => array('type' => 'string', 'null' => false, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_REFERENCE_OLD_TABLE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_REFERENCE_NEW_TABLE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_REFERENCE_OLD_ROW' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ACTION_REFERENCE_NEW_ROW' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CREATED' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'SQL_MODE' => array('type' => 'string', 'null' => false, 'length' => 8192, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DEFINER' => array('type' => 'string', 'null' => false, 'length' => 77, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHARACTER_SET_CLIENT' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLLATION_CONNECTION' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DATABASE_COLLATION' => array('type' => 'string', 'null' => false, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'TRIGGER_CATALOG' => 'Lorem ipsum dolor sit amet',
			'TRIGGER_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'TRIGGER_NAME' => 'Lorem ipsum dolor sit amet',
			'EVENT_MANIPULATION' => 'Lore',
			'EVENT_OBJECT_CATALOG' => 'Lorem ipsum dolor sit amet',
			'EVENT_OBJECT_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'EVENT_OBJECT_TABLE' => 'Lorem ipsum dolor sit amet',
			'ACTION_ORDER' => '',
			'ACTION_CONDITION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ACTION_STATEMENT' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ACTION_ORIENTATION' => 'Lorem i',
			'ACTION_TIMING' => 'Lore',
			'ACTION_REFERENCE_OLD_TABLE' => 'Lorem ipsum dolor sit amet',
			'ACTION_REFERENCE_NEW_TABLE' => 'Lorem ipsum dolor sit amet',
			'ACTION_REFERENCE_OLD_ROW' => 'L',
			'ACTION_REFERENCE_NEW_ROW' => 'L',
			'CREATED' => '2014-02-21 20:52:11',
			'SQL_MODE' => 'Lorem ipsum dolor sit amet',
			'DEFINER' => 'Lorem ipsum dolor sit amet',
			'CHARACTER_SET_CLIENT' => 'Lorem ipsum dolor sit amet',
			'COLLATION_CONNECTION' => 'Lorem ipsum dolor sit amet',
			'DATABASE_COLLATION' => 'Lorem ipsum dolor sit amet'
		),
	);

}
