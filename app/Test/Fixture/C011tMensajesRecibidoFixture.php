<?php
/**
 * C011tMensajesRecibidoFixture
 *
 */
class C011tMensajesRecibidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_mensaje_rec' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tx_telefono' => array('type' => 'string', 'null' => true, 'length' => 11),
		'tx_mensaje_rec' => array('type' => 'string', 'null' => true, 'length' => 100),
		'fe_recibido' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_mensaje_rec')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_mensaje_rec' => 1,
			'tx_telefono' => 'Lorem ips',
			'tx_mensaje_rec' => 'Lorem ipsum dolor sit amet',
			'fe_recibido' => '2012-07-03'
		),
	);
}
