<?php
App::uses('C006UsuarioGruposController', 'Controller');

/**
 * TestC006UsuarioGruposController *
 */
class TestC006UsuarioGruposController extends C006UsuarioGruposController {
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
 * C006UsuarioGruposController Test Case
 *
 */
class C006UsuarioGruposControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c006_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c003t_grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C006UsuarioGrupos = new TestC006UsuarioGruposController();
		$this->C006UsuarioGrupos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C006UsuarioGrupos);

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
