<?php
App::uses('AppController', 'Controller');
/**
 * Produtos Controller
 *
 * @property Produto $Produto
 * @property PaginatorComponent $Paginator
 */
class ProdutosController extends AppController {

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
		$this->Produto->recursive = 0;
		$this->set('produtos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Produto->exists($id)) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
		$this->set('produto', $this->Produto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Produto->create();
			if ($this->Produto->save($this->request->data)) {
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
		if (!$this->Produto->exists($id)) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
			}
		} else {
			$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
			$this->request->data = $this->Produto->find('first', $options);
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
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produto->delete()) {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		} else {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
