<?php
App::uses('MediaObjectType', 'Cma.Model');

/**
 * MediaObjectType Test Case
 *
 */
class MediaObjectTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.media_object_type',
		'plugin.cma.media_object'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MediaObjectType = ClassRegistry::init('Cma.MediaObjectType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MediaObjectType);

		parent::tearDown();
	}

}
