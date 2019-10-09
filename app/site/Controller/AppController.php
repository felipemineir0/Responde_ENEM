<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

   # public $helpers = array('Data', 'Link', 'RenderElement');
    #public $slug_idioma;
    #public $uses = array('Destaque');


    public function beforeFilter() {
    }

    public function beforeRender() {
    	#$destaques  = $this->Destaque->find('all', array('conditions' => array('ativo' => 1), 'order' => 'created'));
		#$this->set(compact('destaques'));
    }
}