<?php
App::uses('DeviceType', 'Cma.Model');

/**
 * DeviceType Test Case
 *
 */
class DeviceTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.device_type',
		'plugin.cma.device'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeviceType = ClassRegistry::init('Cma.DeviceType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeviceType);

		parent::tearDown();
	}

}
