<?php
/**
 * C008tGrupoModemFixture
 *
 */
class C008tGrupoModemFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c008t_grupo_modem';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'c003t_grupo_id' => array('type' => 'integer', 'null' => false),
		'c009t_modem_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'c008t_grupo_modem_idx' => array('unique' => true, 'column' => array('c003t_grupo_id', 'c009t_modem_id'))),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'c003t_grupo_id' => 1,
			'c009t_modem_id' => 1
		),
	);
}
