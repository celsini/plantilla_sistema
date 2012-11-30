<?php
App::uses('Mv004GridDestinatario', 'Model');

/**
 * Mv004GridDestinatario Test Case
 *
 */
class Mv004GridDestinatarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mv004_grid_destinatario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mv004GridDestinatario = ClassRegistry::init('Mv004GridDestinatario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mv004GridDestinatario);

		parent::tearDown();
	}

}
