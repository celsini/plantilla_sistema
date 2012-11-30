<?php
/**
 * Mv003GridTelefonoFixture
 *
 */
class Mv003GridTelefonoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'mv003_grid_telefono';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'C002tTelefono__co_telefono' => array('type' => 'integer', 'null' => true),
		'C002tTelefono__tx_telefono' => array('type' => 'string', 'null' => true, 'length' => 11),
		'C002tTelefono__c001t_destinatario_id' => array('type' => 'integer', 'null' => true),
		'C002tTelefono__i001t_estatus_telefono_id' => array('type' => 'integer', 'null' => true),
		'C001tDestinatario__co_destinatario' => array('type' => 'integer', 'null' => true),
		'C001tDestinatario__nu_cedula' => array('type' => 'integer', 'null' => true),
		'C001tDestinatario__tx_destinatario' => array('type' => 'string', 'null' => true, 'length' => 100),
		'I001tEstatusTelefono__co_estatus' => array('type' => 'integer', 'null' => true),
		'I001tEstatusTelefono__tx_estatus' => array('type' => 'string', 'null' => true, 'length' => 15),
		'I001tEstatusTelefono__in_estatus' => array('type' => 'integer', 'null' => true),
		'c003t_grupo_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array(),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'C002tTelefono__co_telefono' => 1,
			'C002tTelefono__tx_telefono' => 'Lorem ips',
			'C002tTelefono__c001t_destinatario_id' => 1,
			'C002tTelefono__i001t_estatus_telefono_id' => 1,
			'C001tDestinatario__co_destinatario' => 1,
			'C001tDestinatario__nu_cedula' => 1,
			'C001tDestinatario__tx_destinatario' => 'Lorem ipsum dolor sit amet',
			'I001tEstatusTelefono__co_estatus' => 1,
			'I001tEstatusTelefono__tx_estatus' => 'Lorem ipsum d',
			'I001tEstatusTelefono__in_estatus' => 1,
			'c003t_grupo_id' => 1
		),
	);
}
