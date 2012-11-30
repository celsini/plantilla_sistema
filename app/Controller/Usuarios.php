<?php
App::uses('AppController', 'Controller');
/**
 * C005tUsuarios Controller
 *
 * @property C005tUsuario $C005tUsuario
 */
class UsuariosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->C005tUsuario->recursive = 0;
		$this->set('c005tUsuarios', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->C005tUsuario->id = $id;
		if (!$this->C005tUsuario->exists()) {
			throw new NotFoundException(__('El identificador de usuario no existe verifique!'));
		}
		$this->set('c005tUsuario', $this->C005tUsuario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->C005tUsuario->create();
			if ($this->C005tUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registrada exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__(''));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->C005tUsuario->id = $id;
		if (!$this->C005tUsuario->exists()) {
			throw new NotFoundException(__('El identificador de usuario no existe verifique!'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->C005tUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('Informaci&oacute;n registrada exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__(''));
			}
		} else {
			$this->request->data = $this->C005tUsuario->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->C005tUsuario->id = $id;
		if (!$this->C005tUsuario->exists()) {
			throw new NotFoundException(__('El identificador de usuario no existe verifique!'));
		}
		if ($this->C005tUsuario->delete()) {
			$this->Session->setFlash(__('Informaci&oacute;n eliminada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__(''));
		$this->redirect(array('action' => 'index'));
	}
}
