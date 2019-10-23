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
            'loginRedirect' => array('controller' => 'areausuario', 'action' => 'arquivos'),
            'logoutRedirect' => array('controller' => 'home', 'action' => 'index'),
            'userModel' => 'Cooperado',
        ),
        'Cookie'
    );

    public function beforeFilter() {
    }

    public function beforeRender() {
        $usuario = $this->Auth->user();

        $objsessao = $this->Cooperado->find('first', array('conditions' => array('Cooperado.id' => $usuario['Cooperado']['id'])));
        //exit(debug($objsessao));
        $this->set(compact('objsessao'));
    }
}