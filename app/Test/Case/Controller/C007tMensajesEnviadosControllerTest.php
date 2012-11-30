<?php
App::uses('C007tMensajesEnviadosController', 'Controller');

/**
 * TestC007tMensajesEnviadosController *
 */
class TestC007tMensajesEnviadosController extends C007tMensajesEnviadosController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * C007tMensajesEnviadosController Test Case
 *
 */
class C007tMensajesEnviadosControllerTestCase extends CakeTestCase {
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
		$this->C007tMensajesEnviados = new TestC007tMensajesEnviadosController();
		$this->C007tMensajesEnviados->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C007tMensajesEnviados);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
