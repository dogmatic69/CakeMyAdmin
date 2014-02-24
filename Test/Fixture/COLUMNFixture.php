<?php
/**
 * COLUMNFixture
 *
 */
class COLUMNFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'COLUMNS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TABLE_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TABLE_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLUMN_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ORDINAL_POSITION' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 21),
		'COLUMN_DEFAULT' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IS_NULLABLE' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DATA_TYPE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHARACTER_MAXIMUM_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'CHARACTER_OCTET_LENGTH' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'NUMERIC_PRECISION' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'NUMERIC_SCALE' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 21),
		'CHARACTER_SET_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLLATION_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLUMN_TYPE' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLUMN_KEY' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EXTRA' => array('type' => 'string', 'null' => false, 'length' => 27, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PRIVILEGES' => array('type' => 'string', 'null' => false, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLUMN_COMMENT' => array('type' => 'string', 'null' => false, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'COLUMN_NAME' => 'Lorem ipsum dolor sit amet',
			'ORDINAL_POSITION' => '',
			'COLUMN_DEFAULT' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'IS_NULLABLE' => 'L',
			'DATA_TYPE' => 'Lorem ipsum dolor sit amet',
			'CHARACTER_MAXIMUM_LENGTH' => '',
			'CHARACTER_OCTET_LENGTH' => '',
			'NUMERIC_PRECISION' => '',
			'NUMERIC_SCALE' => '',
			'CHARACTER_SET_NAME' => 'Lorem ipsum dolor sit amet',
			'COLLATION_NAME' => 'Lorem ipsum dolor sit amet',
			'COLUMN_TYPE' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'COLUMN_KEY' => 'L',
			'EXTRA' => 'Lorem ipsum dolor sit ame',
			'PRIVILEGES' => 'Lorem ipsum dolor sit amet',
			'COLUMN_COMMENT' => 'Lorem ipsum dolor sit amet'
		),
	);

}
