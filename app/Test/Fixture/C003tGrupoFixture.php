<?php
/**
 * C003tGrupoFixture
 *
 */
class C003tGrupoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c003t_grupo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'co_grupo' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'"sms_mensajes"."c003t_grupo_co_grupo_seq"\''),
		'tx_grupo' => array('type' => 'string', 'null' => true, 'length' => 100),
		'codigo_grupo_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'co_grupo')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'co_grupo' => 1,
			'tx_grupo' => 'Lorem ipsum dolor sit amet',
			'codigo_grupo_id' => 1
		),
	);
}
