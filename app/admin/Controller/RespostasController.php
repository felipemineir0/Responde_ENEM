<?php
App::uses('AppController', 'Controller');
/**
 * Respostas Controller
 *
 * @property Resposta $Resposta
 * @property PaginatorComponent $Paginator
 */
class RespostasController extends AppController {

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
		$this->Resposta->recursive = 0;
		$this->set('respostas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Resposta->exists($id)) {
			throw new NotFoundException(__('Invalid resposta'));
		}
		$options = array('conditions' => array('Resposta.' . $this->Resposta->primaryKey => $id));
		$this->set('resposta', $this->Resposta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Resposta->create();
			if ($this->Resposta->save($this->request->data)) {
				$this->Session->setFlash(__('The resposta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resposta could not be saved. Please, try again.'));
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
		if (!$this->Resposta->exists($id)) {
			throw new NotFoundException(__('Invalid resposta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Resposta->save($this->request->data)) {
				$this->Session->setFlash(__('The resposta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resposta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Resposta.' . $this->Resposta->primaryKey => $id));
			$this->request->data = $this->Resposta->find('first', $options);
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
		$this->Resposta->id = $id;
		if (!$this->Resposta->exists()) {
			throw new NotFoundException(__('Invalid resposta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Resposta->delete()) {
			$this->Session->setFlash(__('The resposta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The resposta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}