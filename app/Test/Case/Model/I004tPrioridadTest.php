<?php
App::uses('I004tPrioridad', 'Model');

/**
 * I004tPrioridad Test Case
 *
 */
class I004tPrioridadTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.i004t_prioridad', 'app.c007t_mensajes_enviado');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->I004tPrioridad = ClassRegistry::init('I004tPrioridad');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->I004tPrioridad);

		parent::tearDown();
	}

}
