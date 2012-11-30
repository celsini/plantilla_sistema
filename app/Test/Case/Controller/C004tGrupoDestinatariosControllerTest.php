<?php
App::uses('C004tGrupoDestinatariosController', 'Controller');

/**
 * TestC004tGrupoDestinatariosController *
 */
class TestC004tGrupoDestinatariosController extends C004tGrupoDestinatariosController {
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
 * C004tGrupoDestinatariosController Test Case
 *
 */
class C004tGrupoDestinatariosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c004t_grupo_destinatario', 'app.c003t_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c001t_destinatario', 'app.c002t_telefono', 'app.i001t_estatus_telefono');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C004tGrupoDestinatarios = new TestC004tGrupoDestinatariosController();
		$this->C004tGrupoDestinatarios->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C004tGrupoDestinatarios);

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
