<?php
App::uses('MediaObject', 'Cma.Model');

/**
 * MediaObject Test Case
 *
 */
class MediaObjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.media_object',
		'plugin.cma.media',
		'plugin.cma.device',
		'plugin.cma.user',
		'plugin.cma.device_type',
		'plugin.cma.media_category',
		'plugin.cma.media_object_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MediaObject = ClassRegistry::init('Cma.MediaObject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MediaObject);

		parent::tearDown();
	}

}
