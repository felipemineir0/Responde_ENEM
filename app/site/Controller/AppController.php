<?php

App::uses('Controller', 'Controller');

# note: this class goes in /app, not /app/controllers
class AppController extends Controller
{
    public $uses = array('Cooperado');

    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'areausuario',
                'action' => 'login',
            ),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'matricula', 'password' => 'senha')
                )
            ),
            'loginRedirect' => array("\areausuario" => true, 'controller' => 'areausuario', 'action' => 'index'),
            'logoutRedirect' => array("\home" => true, 'controller' => 'home', 'action' => 'index'),
            'userModel' => 'Cooperado',
        ),
        'Cookie'
    );

    public function beforeFilter() {

          $this->renovaLogin(false);
      
          $this->Auth->allow('');
    }

    public function beforeRender() {

        $this->renovaLogin(false);

        $user = $this->Auth->user();

        $usuario = $this->Cooperado->find('first', array('conditions' => array('Cooperado.id' => $user['Cooperado']['id'])));
        $this->set(compact('usuario'));
    }

    public function renovaLogin($redirect = false)
  {
    
    $this->log($this->Session->id().':' ."renovaLogin Called\r\n", LOG_DEBUG);
    $cookie_user = $this->Cookie->read('Cooperado');
    $auth_user = $this->Auth->user();

    //debug($this->Auth->allowedActions);
    //die();
    if (!empty($cookie_user) && empty($auth_user)) {
      $this->log("renovaLogin: Lina 90\r\n", LOG_DEBUG);
      $this->Auth->login($cookie_user);
      if ($redirect) {
        $this->log("renovaLogin: Lina 93\r\n", LOG_DEBUG);
       return $this->redirect($this->Auth->redirect());   
     }
   }
 }
}