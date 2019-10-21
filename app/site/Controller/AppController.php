<?php

App::uses('Controller', 'Controller');

# note: this class goes in /app, not /app/controllers
class AppController extends Controller
{
    var $components = array('Auth');

    public function beforeFilter()
    { }

    public function beforeRender()
    {
        #$destaques  = $this->Destaque->find('all', array('conditions' => array('ativo' => 1), 'order' => 'created'));
        #$this->set(compact('destaques'));
    }
}