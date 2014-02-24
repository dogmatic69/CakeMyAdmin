<?php
App::uses('MediaEvent', 'Cma.Model');

/**
 * MediaEvent Test Case
 *
 */
class MediaEventTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.media_event',
		'plugin.cma.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MediaEvent = ClassRegistry::init('Cma.MediaEvent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MediaEvent);

		parent::tearDown();
	}

}
