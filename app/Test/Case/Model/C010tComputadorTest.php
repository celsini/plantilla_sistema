<?php
App::uses('C010tComputador', 'Model');

/**
 * C010tComputador Test Case
 *
 */
class C010tComputadorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.c010t_computador');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->C010tComputador = ClassRegistry::init('C010tComputador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->C010tComputador);

		parent::tearDown();
	}

}
