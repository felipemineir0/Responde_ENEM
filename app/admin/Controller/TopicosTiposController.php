<?php
App::uses('AppController', 'Controller');
/**
 * TopicosTipos Controller
 *
 * @property TopicosTipo $TopicosTipo
 * @property PaginatorComponent $Paginator
 */
class TopicosTiposController extends AppController {

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
		$this->TopicosTipo->recursive = 0;
		$this->set('topicosTipos', $this->Paginator->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TopicosTipo->create();
			if ($this->TopicosTipo->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo de tópico foi salvo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar o tipo de tópico. Por favor, tente novamente.'));
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
		if (!$this->TopicosTipo->exists($id)) {
			throw new NotFoundException(__('Tipo de tópico inválido.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TopicosTipo->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo de tópico foi salvo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar o tipo de tópico. Por favor, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('TopicosTipo.' . $this->TopicosTipo->primaryKey => $id));
			$this->request->data = $this->TopicosTipo->find('first', $options);
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
		$this->TopicosTipo->id = $id;
		if (!$this->TopicosTipo->exists()) {
			throw new NotFoundException(__('Tipo de questão inválido.'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TopicosTipo->delete()) {
			$this->Session->setFlash(__('O tipo de tópico foi excluída.'));
		} else {
			$this->Session->setFlash(__('O tipo de tópico não pôde ser excluído. Por favor, tente novamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}