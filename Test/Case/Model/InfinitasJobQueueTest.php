<?php
App::uses('InfinitasJobQueue', 'Cma.Model');

/**
 * InfinitasJobQueue Test Case
 *
 */
class InfinitasJobQueueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.infinitas_job_queue',
		'plugin.cma.infinitas_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InfinitasJobQueue = ClassRegistry::init('Cma.InfinitasJobQueue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InfinitasJobQueue);

		parent::tearDown();
	}

}
