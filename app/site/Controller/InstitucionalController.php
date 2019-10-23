<?php

App::uses('AppController', 'Controller');

class InstitucionalController extends AppController {

    public function index() {

    }

    public function beforeFilter() {
        $this->Auth->allow(array('index'));
    }

}