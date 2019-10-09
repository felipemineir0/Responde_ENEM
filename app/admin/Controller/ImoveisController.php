<?php
App::uses('AppController', 'Controller');
/**
 * Imoveis Controller
 *
 * @property Imovel $Imovel
 * @property PaginatorComponent $Paginator
 */
class ImoveisController extends AppController {

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
        $this->Imovel->recursive = 0;
        //$this->set('imoveis', $this->Paginator->paginate());
        $this->paginate = array('order' => array('created' => 'desc',), 'limit' => 10);
        $this->set('imoveis', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Imovel->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Imovel.' . $this->Imovel->primaryKey => $id));
        $this->set('imovel', $this->Imovel->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Imovel->create();
            if ($this->Imovel->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
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
        if (!$this->Imovel->exists($id)) {
            throw new NotFoundException(__('Invalid product.'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            if ($this->Imovel->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Imovel.' . $this->Imovel->primaryKey => $id));
            $this->request->data = $this->Imovel->find('first', $options);
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
        $this->Imovel->id = $id;
        if (!$this->Imovel->exists()) {
            throw new NotFoundException(__('Invalid product.'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Imovel->delete()) {
            $this->Session->setFlash(__('The product has been deleted.'));
        } else {
            $this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}