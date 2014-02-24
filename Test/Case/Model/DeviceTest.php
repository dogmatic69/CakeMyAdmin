<?php
App::uses('Device', 'Cma.Model');

/**
 * Device Test Case
 *
 */
class DeviceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.device',
		'plugin.cma.user',
		'plugin.cma.device_type',
		'plugin.cma.media'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Device = ClassRegistry::init('Cma.Device');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Device);

		parent::tearDown();
	}

}
