<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public $uses = array('Destaque');

	public function index() {
		$destaques = $this->Destaque->find("all", array("conditions" => array("ativo" => 1), "order" => "created"));
		$this->set(compact('destaques'));
	}

	public function beforeFilter() {
        $this->Auth->allow(array('index'));
    }

}
