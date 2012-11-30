<?php
/**
 * Mv011DestinatarioGrupoFixture
 *
 */
class Mv011DestinatarioGrupoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'mv011_destinatario_grupo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'CEDULA' => array('type' => 'integer', 'null' => true),
		'DATOS' => array('type' => 'string', 'null' => true, 'length' => 100),
		'TELEFONO' => array('type' => 'string', 'null' => true, 'length' => 11),
		'co_grupo' => array('type' => 'integer', 'null' => true),
		'tx_grupo' => array('type' => 'string', 'null' => true, 'length' => 100),
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
			'CEDULA' => 1,
			'DATOS' => 'Lorem ipsum dolor sit amet',
			'TELEFONO' => 'Lorem ips',
			'co_grupo' => 1,
			'tx_grupo' => 'Lorem ipsum dolor sit amet'
		),
	);
}
