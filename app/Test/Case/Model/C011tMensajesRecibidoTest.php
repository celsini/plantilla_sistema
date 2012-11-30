<?php
App::uses('C011tMensajesRecibido', 'Model');

/**
 * C011tMensajesRecibido Test Case
 *
 */
class C011tMensajesRecibidoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c011t_mensajes_recibido');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C011tMensajesRecibido = ClassRegistry::init('C011tMensajesRecibido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C011tMensajesRecibido);

		parent::tearDown();
	}

}
