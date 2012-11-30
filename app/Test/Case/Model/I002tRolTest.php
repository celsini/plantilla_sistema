<?php
App::uses('I002tRol', 'Model');

/**
 * I002tRol Test Case
 *
 */
class I002tRolTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.i002t_rol', 'app.c005t_usuario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->I002tRol = ClassRegistry::init('I002tRol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->I002tRol);

		parent::tearDown();
	}

}
