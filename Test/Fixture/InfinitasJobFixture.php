<?php
/**
 * InfinitasJobFixture
 *
 */
class InfinitasJobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'infinitas_job_queue_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'host' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pid' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'handler' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'attempts' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5),
		'run_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'completed' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'locked' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'failed' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'infinitas_job_error_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'id' => '5307bc22-75c4-47d7-a732-4d25a1fced60',
			'infinitas_job_queue_id' => 'Lorem ipsum dolor sit amet',
			'host' => 'Lorem ipsum dolor sit amet',
			'pid' => 'Lorem ipsum dolor sit amet',
			'handler' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'attempts' => 1,
			'run_at' => '2014-02-21 20:50:42',
			'completed' => '2014-02-21 20:50:42',
			'locked' => '2014-02-21 20:50:42',
			'failed' => '2014-02-21 20:50:42',
			'infinitas_job_error_count' => 1,
			'created' => '2014-02-21 20:50:42',
			'modified' => '2014-02-21 20:50:42'
		),
	);

}
