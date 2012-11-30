<?php
/**
 * Mv004GridDestinatarioFixture
 *
 */
class Mv004GridDestinatarioFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'mv004_grid_destinatario';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_destinatario' => array('type' => 'integer', 'null' => true),
		'nu_cedula' => array('type' => 'integer', 'null' => true),
		'tx_destinatario' => array('type' => 'string', 'null' => true, 'length' => 100),
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
			'co_destinatario' => 1,
			'nu_cedula' => 1,
			'tx_destinatario' => 'Lorem ipsum dolor sit amet',
			'c003t_grupo_id' => 1
		),
	);
}
