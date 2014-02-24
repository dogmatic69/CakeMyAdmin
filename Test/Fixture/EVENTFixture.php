<?php
/**
 * EVENTFixture
 *
 */
class EVENTFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'EVENTS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'EVENT_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DEFINER' => array('type' => 'string', 'null' => false, 'length' => 77, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TIME_ZONE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_BODY' => array('type' => 'string', 'null' => false, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_DEFINITION' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EVENT_TYPE' => array('type' => 'string', 'null' => false, 'length' => 9, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXECUTE_AT' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'INTERVAL_VALUE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INTERVAL_FIELD' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SQL_MODE' => array('type' => 'string', 'null' => false, 'length' => 8192, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'STARTS' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'ENDS' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'STATUS' => array('type' => 'string', 'null' => false, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ON_COMPLETION' => array('type' => 'string', 'null' => false, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CREATED' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'LAST_ALTERED' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'LAST_EXECUTED' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'EVENT_COMMENT' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ORIGINATOR' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 10),
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
			'EVENT_CATALOG' => 'Lorem ipsum dolor sit amet',
			'EVENT_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'EVENT_NAME' => 'Lorem ipsum dolor sit amet',
			'DEFINER' => 'Lorem ipsum dolor sit amet',
			'TIME_ZONE' => 'Lorem ipsum dolor sit amet',
			'EVENT_BODY' => 'Lorem ',
			'EVENT_DEFINITION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'EVENT_TYPE' => 'Lorem i',
			'EXECUTE_AT' => '2014-02-21 20:52:00',
			'INTERVAL_VALUE' => 'Lorem ipsum dolor sit amet',
			'INTERVAL_FIELD' => 'Lorem ipsum dolo',
			'SQL_MODE' => 'Lorem ipsum dolor sit amet',
			'STARTS' => '2014-02-21 20:52:00',
			'ENDS' => '2014-02-21 20:52:00',
			'STATUS' => 'Lorem ipsum dolo',
			'ON_COMPLETION' => 'Lorem ipsu',
			'CREATED' => '2014-02-21 20:52:00',
			'LAST_ALTERED' => '2014-02-21 20:52:00',
			'LAST_EXECUTED' => '2014-02-21 20:52:00',
			'EVENT_COMMENT' => 'Lorem ipsum dolor sit amet',
			'ORIGINATOR' => '',
			'CHARACTER_SET_CLIENT' => 'Lorem ipsum dolor sit amet',
			'COLLATION_CONNECTION' => 'Lorem ipsum dolor sit amet',
			'DATABASE_COLLATION' => 'Lorem ipsum dolor sit amet'
		),
	);

}
