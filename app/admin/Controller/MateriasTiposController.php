<?php
App::uses('AppController', 'Controller');
/**
 * MateriasTipos Controller
 *
 * @property MateriasTipo $MateriasTipo
 * @property PaginatorComponent $Paginator
 */
class MateriasTiposController extends AppController {

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
		$this->MateriasTipo->recursive = 0;
		$this->set('materiasTipos', $this->Paginator->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MateriasTipo->create();
			if ($this->MateriasTipo->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo de matéria foi salvo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar o tipo de matéria. Por favor, tente novamente.'));
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
		if (!$this->MateriasTipo->exists($id)) {
			throw new NotFoundException(__('Tipo de questão inválido.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MateriasTipo->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo de matéria foi salvo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar o tipo de matéria. Por favor, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('MateriasTipo.' . $this->MateriasTipo->primaryKey => $id));
			$this->request->data = $this->MateriasTipo->find('first', $options);
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
		$this->MateriasTipo->id = $id;
		if (!$this->MateriasTipo->exists()) {
			throw new NotFoundException(__('Tipo de questão inválido.'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MateriasTipo->delete()) {
			$this->Session->setFlash(__('O tipo de matéria foi excluída.'));
		} else {
			$this->Session->setFlash(__('O tipo de matéria não pôde ser excluído. Por favor, tente novamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}