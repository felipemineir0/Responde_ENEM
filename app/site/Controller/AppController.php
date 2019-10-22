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
                'controller' => 'home',
                'action' => 'index',
            ),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'matricula', 'password' => 'senha')
                )
            ),
            'loginRedirect' => array("\areausuario" => true, 'controller' => 'areausuario', 'action' => 'arquivos'),
            'logoutRedirect' => array("\home" => true, 'controller' => 'home', 'action' => 'index'),
            'userModel' => 'Cooperado',
        ),
        'Cookie'
    );

    public function beforeFilter() {
    }

    public function beforeRender() {
        $usuario = $this->Auth->user();

        $objsessao = $this->Cooperado->find('first', array('conditions' => array('Cooperado.id' => $usuario['Cooperado']['id'])));
        $this->set(compact('objsessao'));
    }
}