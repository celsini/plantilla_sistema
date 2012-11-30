<?php
/**
 * C007tMensajesEnviadoFixture
 *
 */
class C007tMensajesEnviadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_mensaje_env' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tx_mensaje_env' => array('type' => 'string', 'null' => true, 'length' => 300),
		'c003t_grupo_id' => array('type' => 'integer', 'null' => true),
		'i003t_estado_id' => array('type' => 'integer', 'null' => true),
		'i004t_prioridad_id' => array('type' => 'integer', 'null' => true),
		'created' => array('type' => 'datetime', 'null' => true),
		'i001t_estatus_telefono_id' => array('type' => 'integer', 'null' => true),
		'tx_fecha' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_mensaje_env')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_mensaje_env' => 1,
			'tx_mensaje_env' => 'Lorem ipsum dolor sit amet',
			'c003t_grupo_id' => 1,
			'i003t_estado_id' => 1,
			'i004t_prioridad_id' => 1,
			'created' => '2012-06-25 11:05:07',
			'i001t_estatus_telefono_id' => 1,
			'tx_fecha' => '2012-06-25'
		),
	);
}
