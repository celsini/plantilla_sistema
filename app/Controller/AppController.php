<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    //var $helpers = array('DatePicker','Javascript','Session','CustomInfo','Ajax');
   // var $helpers = array('Form','Session','DatePicker');
    /*Produccion*/
    //public $components = array('Auth', 'Cookie', 'Session','RequestHandler');

    /*Desarrollo*/
    // public $components = array('Auth', 'Cookie', 'Session','DebugKit.Toolbar');

   // var $helpers = array('Js','Ajax');
    
    public $components = array('Session',
    'Auth' => array(
        'loginAction' => array(
            'controller' => 'Usuarios',
            'action' => 'login'
        ),
        'authError' => 'Lo siento, no tienes acceso para esta acci&oacute;n<br><br>',
        'loginRedirect' => array(
            'controller' => 'Usuarios',
            'action' => 'inicio'
        ),
        'authenticate' => array(
            'Form' => array(
                'fields' => array('username' => 'tx_usuario','password'=>'tx_password'),
                'userModel' => 'Usuario'
            )
        )
    )
);
    

    /*configurar el componente AUTH*/
    public function beforeFilter() {
        Security::setHash('md5');
        $this->Auth->authorize      = 'Controller';
        $this->Auth->deny(array('*'));
        $this->Auth->allow('login','delete');
        $usuario = $this->Auth->user('co_usuario');
        $this->Session->write('userProfileData',$this->getUserRelateData($this->Auth->user('co_usuario')));
        
    }

    public function getUserRelateData($co_usuario){
        $this->loadModel('Usuario');
        $condition = array('conditions' => array('Usuario.co_usuario' => $co_usuario));

       return $userInfo = $this->Usuario->find('first',$condition);
    }



    public function filterC0003tGrupo(){

        return array('C003tGrupo.codigo_grupo_id'=>$this->Session->read('selectedGrupo'),'C003tGrupo.estado'=>'TRUE');
    }

   public function filterMv005GrupoFiltro(){

        return array('Mv005GrupoFiltro.codigo_grupo_id'=>$this->Session->read('selectedGrupo'),'Mv005GrupoFiltro.estado'=>'TRUE');
    }

    public function getSubGrupoFromGrupoId($grupoId){
        $this->loadModel('C003tGrupo');
        $gruposArray = array();
        $this->C003tGrupo->recursive=-1;
        $grupos = $this->C003tGrupo->findAllByCodigo_grupo_id($grupoId);
        for($i=0;$i<count($grupos);$i++)
            array_push($gruposArray,$grupos[$i]['C003tGrupo']['co_grupo']);

        return $gruposArray;

    }

    public function getTxGrupoById($idGrupo){
        $this->loadModel('C003tGrupo');
        $TxGrupo = $this->C003tGrupo->findAllByCo_grupo($idGrupo);
        return $TxGrupo[0]['C003tGrupo']['tx_grupo'];
        
    }

    public function cambiaf_a_postgres($fecha) {
        ereg( "([0-9]{1,2})-([0-9]{1,2})-([0-9]{2,4})", $fecha, $mifecha);
        $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
        return "'".$lafecha."'";
    }

    public function cambiaf_a_normal($fecha,$dMesY=false) {
        ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
        $meses = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
        if($dMesY)
            $lafecha=$mifecha[3]."-".$meses[intval($mifecha[2])]."-".$mifecha[1];
        else
            $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
        return $lafecha;
    }



}
