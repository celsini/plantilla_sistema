<?php
/**
 * C002tTelefonoFixture
 *
 */
class C002tTelefonoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c002t_telefono';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_telefono' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tx_telefono' => array('type' => 'string', 'null' => true, 'length' => 11),
		'c001t_destinatario_id' => array('type' => 'integer', 'null' => true),
		'i001t_estatus_telefono_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_telefono')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_telefono' => 1,
			'tx_telefono' => 'Lorem ips',
			'c001t_destinatario_id' => 1,
			'i001t_estatus_telefono_id' => 1
		),
	);
}
