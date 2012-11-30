<?php
App::uses('C001tDestinatario', 'Model');

/**
 * C001tDestinatario Test Case
 *
 */
class C001tDestinatarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c001t_destinatario', 'app.c002t_telefono', 'app.i001t_estatus_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C001tDestinatario = ClassRegistry::init('C001tDestinatario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C001tDestinatario);

		parent::tearDown();
	}

}
