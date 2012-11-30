<?php
App::uses('AppModel', 'Model');
/**
 * C005tUsuario Model
 *
 * @property I002tRol $I002tRol
 * @property C006UsuarioGrupo $C006UsuarioGrupo
 */
class Usuario extends AppModel {
    var $actsAs = array('Containable');

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'usuarios';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'co_usuario';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tx_usuario';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'co_usuario' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'tx_usuario' => array(
                        'alphaNumeric'=> array(
                            'rule' => 'alphaNumeric',
                            'require' => true,
                            'message' => 'Campo Obligatorio'

                        ),
                       'unique' => array(
                        'rule' => 'isUnique',
                        'required' => 'create',
                        'message' => 'Usuario ya existe verifique!'
                        )
                ),
                'tx_password' => array(
                        'notempty'=> array(
                            'rule' => 'notempty',
                            'require' => true,
                            'message' => 'Campo Obligatorio'

                        )
                ),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
/*	public $hasMany = array(
		'C006UsuarioGrupo' => array(
			'className' => 'C006tUsuarioGrupo',
			'foreignKey' => 'c005t_usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);*/

 public function beforeSave() {
     
    $isMd5 = $this->isValidMd5($this->data['C005tUsuario']['tx_password']);
    Security::setHash('md5');
    if($isMd5){
             if (isset($this->data[$this->alias]['tx_password'])) {
                $this->data[$this->alias]['tx_password'] = ($this->data[$this->alias]['tx_password']);

            }
    }
    else
        {
            if (isset($this->data[$this->alias]['tx_password'])) {
                $this->data[$this->alias]['tx_password'] = AuthComponent::password($this->data[$this->alias]['tx_password']);
            }
        }
    return true;
}


public function afterSave(){
 /*   ClassRegistry::init('I002tRol');
    var_dump($this->data);
    var_dump($this->getColumnTypes());
    exit;
    $this->I002tRol->create();
    $data = array("I002tRol"=> array("tx_rol"=>"UNO", "tx_descripcion_rol"=>"11")) ;
    $this->I002tRol->save($data);*/
}
}
