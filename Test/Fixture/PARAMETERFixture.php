<?php
/**
 * PARAMETERFixture
 *
 */
class PARAMETERFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'PARAMETERS';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SPECIFIC_CATALOG' => array('type' => 'string', 'null' => false, 'length' => 512, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SPECIFIC_SCHEMA' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SPECIFIC_NAME' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ORDINAL_POSITION' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 21),
		'PARAMETER_MODE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PARAMETER_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DATA_TYPE' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CHARACTER_MAXIMUM_LENGTH' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'CHARACTER_OCTET_LENGTH' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'NUMERIC_PRECISION' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'NUMERIC_SCALE' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 21),
		'CHARACTER_SET_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COLLATION_NAME' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DTD_IDENTIFIER' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ROUTINE_TYPE' => array('type' => 'string', 'null' => false, 'length' => 9, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'SPECIFIC_CATALOG' => 'Lorem ipsum dolor sit amet',
			'SPECIFIC_SCHEMA' => 'Lorem ipsum dolor sit amet',
			'SPECIFIC_NAME' => 'Lorem ipsum dolor sit amet',
			'ORDINAL_POSITION' => 1,
			'PARAMETER_MODE' => 'Lor',
			'PARAMETER_NAME' => 'Lorem ipsum dolor sit amet',
			'DATA_TYPE' => 'Lorem ipsum dolor sit amet',
			'CHARACTER_MAXIMUM_LENGTH' => 1,
			'CHARACTER_OCTET_LENGTH' => 1,
			'NUMERIC_PRECISION' => 1,
			'NUMERIC_SCALE' => 1,
			'CHARACTER_SET_NAME' => 'Lorem ipsum dolor sit amet',
			'COLLATION_NAME' => 'Lorem ipsum dolor sit amet',
			'DTD_IDENTIFIER' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ROUTINE_TYPE' => 'Lorem i'
		),
	);

}
