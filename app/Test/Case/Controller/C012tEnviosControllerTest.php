<?php
App::uses('C012tEnviosController', 'Controller');

/**
 * TestC012tEnviosController *
 */
class TestC012tEnviosController extends C012tEnviosController {
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
 * C012tEnviosController Test Case
 *
 */
class C012tEnviosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c012t_envio', 'app.i004t_prioridad', 'app.c007t_mensajes_enviado', 'app.c003t_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c004t_grupo_destinatario', 'app.c001t_destinatario', 'app.c002t_telefono', 'app.i001t_estatus_telefono', 'app.i003t_estado', 'app.c007t_mensajes_enviados');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C012tEnvios = new TestC012tEnviosController();
		$this->C012tEnvios->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C012tEnvios);

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
