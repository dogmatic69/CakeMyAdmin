<?php
App::uses('InfinitasJobLog', 'Cma.Model');

/**
 * InfinitasJobLog Test Case
 *
 */
class InfinitasJobLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.infinitas_job_log',
		'plugin.cma.infinitas_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InfinitasJobLog = ClassRegistry::init('Cma.InfinitasJobLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InfinitasJobLog);

		parent::tearDown();
	}

}
