<?php
App::uses('AppController', 'Controller');
/**
 * Destaques Controller
 *
 * @property Destaque $Destaque
 * @property PaginatorComponent $Paginator
 */
class DestaquesController extends AppController {

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
        $this->Destaque->recursive = 0;
        $this->set('destaques', $this->Paginator->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->Destaque->exists($id)) {
            throw new NotFoundException(__('Invalid destaque'));
        }
        $options = array('conditions' => array('Destaque.' . $this->Destaque->primaryKey => $id));
        $this->set('destaque', $this->Destaque->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Destaque->create();
            if ($this->Destaque->save($this->request->data)) {
                $this->Session->setFlash(__('The destaque has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The destaque could not be saved. Please, try again.'));
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
        if (!$this->Destaque->exists($id)) {
            throw new NotFoundException(__('Invalid destaque'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Destaque->save($this->request->data)) {
                $this->Session->setFlash(__('The destaque has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The destaque could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Destaque.' . $this->Destaque->primaryKey => $id));
            $this->request->data = $this->Destaque->find('first', $options);
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
        $this->Destaque->id = $id;
        if (!$this->Destaque->exists()) {
            throw new NotFoundException(__('Invalid destaque'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Destaque->delete()) {
            $this->Session->setFlash(__('The destaque has been deleted.'));
        } else {
            $this->Session->setFlash(__('The destaque could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
