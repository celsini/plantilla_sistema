<?php
/**
 * C005tUsuarioFixture
 *
 */
class C005tUsuarioFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c005t_usuario';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_usuario' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tx_usuario' => array('type' => 'string', 'null' => true, 'length' => 20),
		'i002t_rol_id' => array('type' => 'integer', 'null' => true),
		'tx_password' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_usuario')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_usuario' => 1,
			'tx_usuario' => 'Lorem ipsum dolor ',
			'i002t_rol_id' => 1,
			'tx_password' => 'Lorem ipsum dolor sit amet'
		),
	);
}
