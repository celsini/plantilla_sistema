<?php
App::uses('C007tMensajesEnviado', 'Model');

/**
 * C007tMensajesEnviado Test Case
 *
 */
class C007tMensajesEnviadoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c007t_mensajes_enviado', 'app.i003t_estado', 'app.i004t_prioridad', 'app.i001t_estatus_telefono', 'app.c002t_telefono', 'app.c001t_destinatario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C007tMensajesEnviado = ClassRegistry::init('C007tMensajesEnviado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C007tMensajesEnviado);

		parent::tearDown();
	}

}
