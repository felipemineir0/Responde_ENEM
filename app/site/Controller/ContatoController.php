<?php

App::uses('AppController', 'Controller');

class ContatoController extends AppController {

    public $uses = array();

    public function index() {
        if ($this->request->is('ajax') || $this->request->is('post')) {
            try {
                App::import('Component', 'EmailTemplateContato');
                $EmailTemplate = new EmailTemplateContatoComponent();
                $EmailTemplate->EmailContato($this->request->data);
                exit("true");
            } catch (Exception $e) {
                exit(debug($e->getMessage()));
                // exit("Erro ao enviar mensagem, por favor tente mais tarde.");
            }
        }
    }

    public function beforeFilter() {
        $this->Auth->allow(array('index'));
    }
}