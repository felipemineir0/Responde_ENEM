<?php

App::uses('AppController', 'Controller');

/**
 * Imoveis Controller
 *
 * @property Questao $Questao
 * @property PaginatorComponent $Paginator
 */
class QuestoesController extends AppController {

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
        $this->Questao->recursive = 0;
        //$this->set('questoes', $this->Paginator->paginate());
        $this->paginate = array('order' => array('created' => 'desc',), 'limit' => 10);
        $this->set('questoes', $this->Paginator->paginate());
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Questao->create();
            if ($this->Questao->save($this->request->data)) {
                $this->Session->setFlash(__('O questão foi salva.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não foi possível salvar a questão. Por favor, tente novamente.'));
            }
        }
        $materiasTipos = $this->Questao->MateriasTipo->find('list');
        $respostas = $this->Questao->Resposta->find('list');
        $this->set(compact('materiasTipos', 'respostas'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Questao->exists($id)) {
            throw new NotFoundException(__('Questão inválida.'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            if ($this->Questao->save($this->request->data)) {
                $this->Session->setFlash(__('O questão foi salva.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não foi possível salvar a questão. Por favor, tente novamente.'));
            }
        } else {
            $options = array('conditions' => array('Questao.' . $this->Questao->primaryKey => $id));
            $this->request->data = $this->Questao->find('first', $options);
        }
        $materiasTipos = $this->Questao->MateriasTipo->find('list');
        $respostas = $this->Questao->Resposta->find('list');
        $this->set(compact('materiasTipos', 'respostas'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Questao->id = $id;
        if (!$this->Questao->exists()) {
            throw new NotFoundException(__('Questão inválida.'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Questao->delete()) {
            $this->Session->setFlash(__('A questão foi excluída.'));
        } else {
            $this->Session->setFlash(__('A questão não pôde ser excluída. Por favor, tente novamente.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}