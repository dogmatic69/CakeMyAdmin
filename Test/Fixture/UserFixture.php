<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'device_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'facebook_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'unique'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'facebook_id' => array('column' => 'facebook_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '5307bc23-9f08-4269-beae-4d25a1fced60',
			'username' => 'Lorem ipsum dolor sit amet',
			'device_count' => 1,
			'created' => '2014-02-21 20:50:43',
			'modified' => '2014-02-21 20:50:43',
			'facebook_id' => '',
			'password' => 'Lorem ipsum dolor sit amet'
		),
	);

}
