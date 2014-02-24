<?php
App::uses('MediaFavorite', 'Cma.Model');

/**
 * MediaFavorite Test Case
 *
 */
class MediaFavoriteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.cma.media_favorite',
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
		$this->MediaFavorite = ClassRegistry::init('Cma.MediaFavorite');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MediaFavorite);

		parent::tearDown();
	}

}
