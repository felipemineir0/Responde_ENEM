<?php
App::uses('AppController', 'Controller');
/**
 * Galerias Controller
 *
 * @property Galeria $Galeria
 * @property PaginatorComponent $Paginator
 */
class GaleriasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Galeria->recursive = 0;
		$this->set('galerias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Galeria->exists($id)) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$options = array('conditions' => array('Galeria.' . $this->Galeria->primaryKey => $id));
		$this->set('galeria', $this->Galeria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Galeria->create();
			if ($this->Galeria->save($this->request->data)) {
				$this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Galeria->exists($id)) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Galeria->save($this->request->data)) {
				$this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
			}
		} else {
			$options = array('conditions' => array('Galeria.' . $this->Galeria->primaryKey => $id));
			$this->request->data = $this->Galeria->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Galeria->id = $id;
		if (!$this->Galeria->exists()) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Galeria->delete()) {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		} else {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
