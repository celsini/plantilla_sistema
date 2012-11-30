<?php
App::uses('I004tPrioridadsController', 'Controller');

/**
 * TestI004tPrioridadsController *
 */
class TestI004tPrioridadsController extends I004tPrioridadsController {
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
 * I004tPrioridadsController Test Case
 *
 */
class I004tPrioridadsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.i004t_prioridad', 'app.c007t_mensajes_enviado', 'app.c003t_grupo', 'app.codigo_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c004t_grupo_destinatario', 'app.c001t_destinatario', 'app.c002t_telefono', 'app.i001t_estatus_telefono', 'app.i003t_estado');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->I004tPrioridads = new TestI004tPrioridadsController();
		$this->I004tPrioridads->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->I004tPrioridads);

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
