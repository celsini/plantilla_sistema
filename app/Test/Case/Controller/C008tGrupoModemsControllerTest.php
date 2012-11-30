<?php
App::uses('C008tGrupoModemsController', 'Controller');

/**
 * TestC008tGrupoModemsController *
 */
class TestC008tGrupoModemsController extends C008tGrupoModemsController {
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
 * C008tGrupoModemsController Test Case
 *
 */
class C008tGrupoModemsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c008t_grupo_modem', 'app.c003t_grupo', 'app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c007t_mensajes_enviado', 'app.i003t_estado', 'app.i004t_prioridad', 'app.i001t_estatus_telefono', 'app.c002t_telefono', 'app.c001t_destinatario', 'app.c004t_grupo_destinatario', 'app.c009t_modem', 'app.c010t_computador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C008tGrupoModems = new TestC008tGrupoModemsController();
		$this->C008tGrupoModems->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C008tGrupoModems);

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
