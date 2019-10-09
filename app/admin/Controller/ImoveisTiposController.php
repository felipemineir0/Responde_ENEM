<?php
App::uses('AppController', 'Controller');
/**
 * ImoveisTipos Controller
 *
 * @property ImoveisTipo $ImoveisTipo
 * @property PaginatorComponent $Paginator
 */
class ImoveisTiposController extends AppController {

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
		$this->ImoveisTipo->recursive = 0;
		$this->set('imoveisTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ImoveisTipo->exists($id)) {
			throw new NotFoundException(__('Invalid imoveis tipo'));
		}
		$options = array('conditions' => array('ImoveisTipo.' . $this->ImoveisTipo->primaryKey => $id));
		$this->set('imoveisTipo', $this->ImoveisTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ImoveisTipo->create();
			if ($this->ImoveisTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The imoveis tipo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imoveis tipo could not be saved. Please, try again.'));
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
		if (!$this->ImoveisTipo->exists($id)) {
			throw new NotFoundException(__('Invalid imoveis tipo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ImoveisTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The imoveis tipo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imoveis tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImoveisTipo.' . $this->ImoveisTipo->primaryKey => $id));
			$this->request->data = $this->ImoveisTipo->find('first', $options);
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
		$this->ImoveisTipo->id = $id;
		if (!$this->ImoveisTipo->exists()) {
			throw new NotFoundException(__('Invalid imoveis tipo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ImoveisTipo->delete()) {
			$this->Session->setFlash(__('The imoveis tipo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The imoveis tipo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
