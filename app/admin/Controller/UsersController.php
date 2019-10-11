<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    //public $helpers = array('FormAdmin');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->log($this->Session->id().':' ."beforeFilter UsersController called\r\n", LOG_DEBUG);
        $this->Auth->allow(array('logout','login'));
    }

    public function login() {
        $this->log($this->Session->id().':' ."UserLogin called\r\n", LOG_DEBUG);
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Cookie->write('User', $this->Auth->user(), false, 43200);
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Usuário ou senha inválidos. Por favor, Tente novamente.'));
        }
        $this->layout = '';
        
    }

    public function logout() {
         $this->log($this->Session->id().':' ."UserLogout called\r\n", LOG_DEBUG);
        $this->Cookie->delete('User');
        $this->redirect($this->Auth->logout());
    }

    public function index() {

        $this->paginate = array('order' => array('created' => 'desc',), 'limit' => 10);
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
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
        if (!$this->User->exists($id)) {
            $this->Session->setFlash('Registro não pode ser encontrado.', 'default', array('class' => 'alert alert-danger space'));
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Registro editado com sucesso!', 'default', array('class' => 'alert alert-success space'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Registro não pode ser editado. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
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
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Registro não pode ser encontrado.', 'default', array('class' => 'alert alert-danger space'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
        } else {
            $this->Session->setFlash('Registro não pode ser excluído. Por favor, tente novamente.', 'default', array('class' => 'alert alert-danger space'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function alterar_senha($id = null) {


        if (!empty($this->request->data)) {
            //echo($this->request->is('post'));
            //exit(debug($this->request));

            $this->User->recursive = -1;
            $user = $this->User->find("first", array("conditions" => array("User.id" => $this->request->data["User"]["id"])));

            $passwordHasher = new SimplePasswordHasher();
            $senha_anterior = $passwordHasher->hash(
                    $this->request->data["User"]["senha_anterior"]
            );
            //exit(debug($user));
            //exit(debug($this->request->data["User"]["nova_senha"]));
            if ($senha_anterior == $user["User"]["password"]) {
                //exit(debug($this->request->data["User"]["nova_senha"]));
                $user["User"]["password"] = $this->request->data["User"]["nova_senha"];
                //exit(debug($user));
                if ($this->User->save($user)) {
                    //exit(debug($alumni));
                    $this->Session->setFlash('Senha alterada com sucesso!', 'default', array('class' => 'alert alert-success space'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Houve um erro no salvamento. Por favor, tente novamente.', 'default', array('class' => 'alert alert-danger space'));
                }
            } else {
                $this->Session->setFlash('Senha atual não corresponde a senha digitada.', 'default', array('class' => 'alert alert-danger space'));
            }
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->request->data = $this->User->find('first', $options);
    }

}
