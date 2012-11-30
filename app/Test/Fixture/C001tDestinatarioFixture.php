<?php
/**
 * C001tDestinatarioFixture
 *
 */
class C001tDestinatarioFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c001t_destinatario';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_destinatario' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'nu_cedula' => array('type' => 'integer', 'null' => true),
		'tx_destinatario' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_destinatario'), 'c001uk_destinatario' => array('unique' => true, 'column' => 'nu_cedula')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_destinatario' => 1,
			'nu_cedula' => 1,
			'tx_destinatario' => 'Lorem ipsum dolor sit amet'
		),
	);
}
