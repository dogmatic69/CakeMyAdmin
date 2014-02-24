<?php
App::uses('MediaCategory', 'Cma.Model');

/**
 * MediaCategory Test Case
 *
 */
class MediaCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.media_category',
		'plugin.cma.media',
		'plugin.cma.device',
		'plugin.cma.user',
		'plugin.cma.device_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MediaCategory = ClassRegistry::init('Cma.MediaCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MediaCategory);

		parent::tearDown();
	}

}
