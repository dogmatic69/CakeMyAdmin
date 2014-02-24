<?php
App::uses('MediaShare', 'Cma.Model');

/**
 * MediaShare Test Case
 *
 */
class MediaShareTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.media_share',
		'plugin.cma.media',
		'plugin.cma.device',
		'plugin.cma.user',
		'plugin.cma.device_type',
		'plugin.cma.media_category',
		'plugin.cma.album',
		'plugin.cma.ref'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MediaShare = ClassRegistry::init('Cma.MediaShare');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MediaShare);

		parent::tearDown();
	}

}
