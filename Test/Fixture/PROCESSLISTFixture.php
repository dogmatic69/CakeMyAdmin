<?php
/**
 * PROCESSLISTFixture
 *
 */
class PROCESSLISTFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'PROCESSLIST';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 4),
		'USER' => array('type' => 'string', 'null' => false, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'HOST' => array('type' => 'string', 'null' => false, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DB' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COMMAND' => array('type' => 'string', 'null' => false, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TIME' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 7),
		'STATE' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INFO' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'ID' => '',
			'USER' => 'Lorem ipsum do',
			'HOST' => 'Lorem ipsum dolor sit amet',
			'DB' => 'Lorem ipsum dolor sit amet',
			'COMMAND' => 'Lorem ipsum do',
			'TIME' => 1,
			'STATE' => 'Lorem ipsum dolor sit amet',
			'INFO' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
