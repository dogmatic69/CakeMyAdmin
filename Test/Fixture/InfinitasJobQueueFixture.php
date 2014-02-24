<?php
/**
 * InfinitasJobQueueFixture
 *
 */
class InfinitasJobQueueFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'max_attempts' => array('type' => 'integer', 'null' => false, 'default' => '5', 'length' => 5),
		'sleep_between' => array('type' => 'integer', 'null' => false, 'default' => '5', 'length' => 5),
		'retry_delay' => array('type' => 'integer', 'null' => false, 'default' => '7200', 'length' => 8),
		'pending_job_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'failed_job_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'locked_job_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'completed_job_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'pid' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'name' => array('column' => 'name', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '5307bc22-8f98-400a-b93b-4d25a1fced60',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'max_attempts' => 1,
			'sleep_between' => 1,
			'retry_delay' => 1,
			'pending_job_count' => 1,
			'failed_job_count' => 1,
			'locked_job_count' => 1,
			'completed_job_count' => 1,
			'pid' => 1,
			'created' => '2014-02-21 20:50:42',
			'modified' => '2014-02-21 20:50:42'
		),
	);

}
