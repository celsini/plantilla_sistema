<?php
/**
 * RolFixture
 *
 */
class RolFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'rol';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_rol' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tx_rol' => array('type' => 'string', 'null' => true, 'length' => 15),
		'tx_descripcion_rol' => array('type' => 'string', 'null' => true, 'length' => 50),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_rol')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_rol' => 1,
			'tx_rol' => 'Lorem ipsum d',
			'tx_descripcion_rol' => 'Lorem ipsum dolor sit amet'
		),
	);
}
