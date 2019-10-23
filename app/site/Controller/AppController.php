<?php

App::uses('Controller', 'Controller');

class AppController extends Controller
{
    public $uses = array('Cooperado');

    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'home',
                'action' => 'index',
            ),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'matricula', 'password' => 'senha')
                )
            ),
            'loginRedirect' => array('controller' => 'areausuario', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'home', 'action' => 'index'),
            'userModel' => 'Cooperado',
        ),
        'Cookie'
    );

    public function beforeFilter() {

        $this->renovaLogin(false);
      
        $this->Auth->allow('');
    }

    public function beforeRender() {
        $usuario = $this->Auth->user();

        $objsessao = $this->Cooperado->find('first', array('conditions' => array('Cooperado.id' => $usuario['Cooperado']['id'])));
        $this->set(compact('objsessao'));
    }

    public function renovaLogin($redirect = false)
    {
    
    $this->log($this->Session->id().':' ."renovaLogin Called\r\n", LOG_DEBUG);
    $cookie_user = $this->Cookie->read('Cooperado');
    $auth_user = $this->Auth->user();

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