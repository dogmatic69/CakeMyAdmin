<?php
App::uses('Media', 'Cma.Model');

/**
 * Media Test Case
 *
 */
class MediaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.media',
		'plugin.cma.device',
		'plugin.cma.user',
		'plugin.cma.device_type',
		'plugin.cma.media_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Media = ClassRegistry::init('Cma.Media');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Media);

		parent::tearDown();
	}

}
