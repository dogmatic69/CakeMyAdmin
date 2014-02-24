<?php
App::uses('InfinitasJob', 'Cma.Model');

/**
 * InfinitasJob Test Case
 *
 */
class InfinitasJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.infinitas_job',
		'plugin.cma.infinitas_job_queue',
		'plugin.cma.infinitas_job_log'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InfinitasJob = ClassRegistry::init('Cma.InfinitasJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InfinitasJob);

		parent::tearDown();
	}

}
