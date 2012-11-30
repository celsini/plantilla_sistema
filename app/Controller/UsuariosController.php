<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 */
class UsuariosController extends AppController {
    var $uses = array('Usuario');
    public $paginate = array(
            'limit' => 20,
            'order' => array(
                            'Usuario.co_usuario' => 'asc'
            )
    );

    /**
     * index method
     *
     * @return void
     */
    public function index($query = null) {
        $data = $this->request->data;
        /*echo "<pre>";
                    var_dump($data["busqueda"]);
                echo "</pre>";
                var_dump($this->request->data['busqueda ']);*/
        if(isset($data["busqueda"]))
            $query = $data["busqueda"];

        $this->Usuario->recursive = 0;
        if(!empty($query)){
                $Usuarios =$this->paginate('Usuario',array('UPPER(Usuario.tx_usuario) LIKE'=>'%'.strtoupper($query).'%'));
                        if(count($Usuarios) < 1)
                            $this->Session->setFlash(__('No existe ninguna coincidencia verifique!'));

            $this->set(compact('Usuarios'));
            $this->set(compact('query'));
        }
        else
            $this->set('Usuarios', $this->paginate());

    }
    //'conditions' => array('Usuario.tx_usuario LIKE' => 'RR%'),
    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('El identificador no existe verifique!'));
        }
        $this->set('Usuario', $this->Usuario->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {


            if ($this->Usuario->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Usuario Guardado Exitosamente'));
                $this->redirect(array('action' => 'index'));
            } else {
                $tipoUser = $this->request->data['Usuario']['tx_tipo_usuario'];
                $this->set(compact('tipoUser'));
                $this->Session->setFlash(__(''));
            }
        }


       // $c003tGrupos = $this->Usuario->C006UsuarioGrupo->C003tGrupo->find('list',array('conditions'=>array('C003tGrupo.codigo_grupo_id'=>0,'C003tGrupo.co_grupo <> '=>0)));
        $rols = $this->Usuario->Rol->find('list');
        $this->set(compact('rols','tipoUser'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('El identificador no existe verifique!'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('Informaci&oacute;n registrada exitosamente'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__(''));
            }
        } else {
            $this->request->data = $this->Usuario->read(null, $id);

        }
        $rols = $this->Usuario->Rol->find('list');


        $this->set(compact('rols'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('El identificador no existe verifique!'));
        }
        if ($this->Usuario->delete()) {
            $this->Session->setFlash(__('Informaci&oacute;n registrada eliminada'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__(''));
        $this->redirect(array('action' => 'index'));
    }

    public function login() {
        $this->layout ="login";
        $bind = false;
        $fechaValida = false;
        $ingresoHabilitado = false;
        $activarFiltro = false;
       if ($this->Auth->login()) {
              return $this->redirect($this->Auth->redirect());
         } else {
             $this->Session->setFlash(__('Datos Incorrectos Verifique!'), 'default', array(), 'auth');
         }

    }

    public function logout() {
        $this->Session->destroy('userProfileData');
        $this->Session->setFlash('Se ha desconectado &eacute;xitosamente');
        $this->redirect($this->Auth->logout());
    }

    public function inicio() {

        //var_dump($this->Session->read('selectedGrupo'));
    }

       public function isAuthorized() {
        //var_dump($usuario = $this->Session->read('userProfileData'));
        return true;
    }

}
