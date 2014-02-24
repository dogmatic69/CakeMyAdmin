<?php
/**
 * ROUTINEFixture
 *
 */
class ROUTINEFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ROUTINES';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SPECIFIC_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_TYPE' => array('type' => 'string', 'null' => false, 'length' => 9, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DATA_TYPE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHARACTER_MAXIMUM_LENGTH' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'CHARACTER_OCTET_LENGTH' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'NUMERIC_PRECISION' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'NUMERIC_SCALE' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'CHARACTER_SET_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLLATION_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DTD_IDENTIFIER' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_BODY' => array('type' => 'string', 'null' => false, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_DEFINITION' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXTERNAL_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXTERNAL_LANGUAGE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PARAMETER_STYLE' => array('type' => 'string', 'null' => false, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IS_DETERMINISTIC' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SQL_DATA_ACCESS' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SQL_PATH' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SECURITY_TYPE' => array('type' => 'string', 'null' => false, 'length' => 7, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CREATED' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'LAST_ALTERED' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'SQL_MODE' => array('type' => 'string', 'null' => false, 'length' => 8192, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_COMMENT' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'SPECIFIC_NAME' => 'Lorem ipsum dolor sit amet',
			'ROUTINE_CATALOG' => 'Lorem ipsum dolor sit amet',
			'ROUTINE_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'ROUTINE_NAME' => 'Lorem ipsum dolor sit amet',
			'ROUTINE_TYPE' => 'Lorem i',
			'DATA_TYPE' => 'Lorem ipsum dolor sit amet',
			'CHARACTER_MAXIMUM_LENGTH' => 1,
			'CHARACTER_OCTET_LENGTH' => 1,
			'NUMERIC_PRECISION' => 1,
			'NUMERIC_SCALE' => 1,
			'CHARACTER_SET_NAME' => 'Lorem ipsum dolor sit amet',
			'COLLATION_NAME' => 'Lorem ipsum dolor sit amet',
			'DTD_IDENTIFIER' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ROUTINE_BODY' => 'Lorem ',
			'ROUTINE_DEFINITION' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'EXTERNAL_NAME' => 'Lorem ipsum dolor sit amet',
			'EXTERNAL_LANGUAGE' => 'Lorem ipsum dolor sit amet',
			'PARAMETER_STYLE' => 'Lorem ',
			'IS_DETERMINISTIC' => 'L',
			'SQL_DATA_ACCESS' => 'Lorem ipsum dolor sit amet',
			'SQL_PATH' => 'Lorem ipsum dolor sit amet',
			'SECURITY_TYPE' => 'Lorem',
			'CREATED' => '2014-02-21 20:52:07',
			'LAST_ALTERED' => '2014-02-21 20:52:07',
			'SQL_MODE' => 'Lorem ipsum dolor sit amet',
			'ROUTINE_COMMENT' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'DEFINER' => 'Lorem ipsum dolor sit amet',
			'CHARACTER_SET_CLIENT' => 'Lorem ipsum dolor sit amet',
			'COLLATION_CONNECTION' => 'Lorem ipsum dolor sit amet',
			'DATABASE_COLLATION' => 'Lorem ipsum dolor sit amet'
		),
	);

}
