<?php
/**
 * MediaObjectFixture
 *
 */
class MediaObjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'media_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'media_object_type_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'x' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'y' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'width' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'height' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'automatic' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => '5307bc23-3088-4aad-9c52-4d25a1fced60',
			'media_id' => 'Lorem ipsum dolor sit amet',
			'media_object_type_id' => 'Lorem ipsum dolor sit amet',
			'x' => 1,
			'y' => 1,
			'width' => 1,
			'height' => 1,
			'automatic' => 1,
			'created' => '2014-02-21 20:50:43'
		),
	);

}
