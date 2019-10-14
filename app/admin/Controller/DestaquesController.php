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
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Destaque->create();
            if ($this->Destaque->save($this->request->data)) {
                $this->Session->setFlash(__('A imagem do player da home foi salva.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não foi possível salvar a imagem do player da home. Por favor, tente novamente.'));
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
            throw new NotFoundException(__('Imagem do player da home inválida.'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Destaque->save($this->request->data)) {
                $this->Session->setFlash(__('A imagem do player da home foi salva.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não foi possível salvar a imagem do player da home. Por favor, tente novamente.'));
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
            throw new NotFoundException(__('Imagem do player da home inválida.'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Destaque->delete()) {
            $this->Session->setFlash(__('A imagem do player da home foi deletada.'));
        } else {
            $this->Session->setFlash(__('Não foi possível salvar a imagem do player da home. Por favor, tente novamente.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}