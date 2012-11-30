<?php
/**
 * C006tUsuarioGrupoFixture
 *
 */
class C006tUsuarioGrupoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'c006t_usuario_grupo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'c005t_usuario_id' => array('type' => 'integer', 'null' => false),
		'c003t_grupo_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
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
			'c005t_usuario_id' => 1,
			'c003t_grupo_id' => 1
		),
	);
}
