<?php
App::uses('C006tUsuarioGruposController', 'Controller');

/**
 * TestC006tUsuarioGruposController *
 */
class TestC006tUsuarioGruposController extends C006tUsuarioGruposController {
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
 * C006tUsuarioGruposController Test Case
 *
 */
class C006tUsuarioGruposControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c006t_usuario_grupo', 'app.c005t_usuario', 'app.i002t_rol', 'app.c006_usuario_grupo', 'app.c003t_grupo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C006tUsuarioGrupos = new TestC006tUsuarioGruposController();
		$this->C006tUsuarioGrupos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C006tUsuarioGrupos);

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
/**
 * testIsAuthorized method
 *
 * @return void
 */
	public function testIsAuthorized() {

	}
}
