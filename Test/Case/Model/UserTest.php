<?php
App::uses('User', 'Cma.Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.user',
		'plugin.cma.facebook',
		'plugin.cma.device',
		'plugin.cma.device_type',
		'plugin.cma.media',
		'plugin.cma.media_category',
		'plugin.cma.media_event',
		'plugin.cma.media_favorite',
		'plugin.cma.media_share',
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
		$this->User = ClassRegistry::init('Cma.User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
