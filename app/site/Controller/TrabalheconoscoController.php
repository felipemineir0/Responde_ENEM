<?php

App::uses('AppController', 'Controller');

class TrabalheconoscoController extends AppController {

    public $uses = array('Curriculo');

    public function index() {
        if ($this->request->is('ajax') || $this->request->is('post')) {

            $this->Curriculo->create();
            if ($this->Curriculo->save($this->request->data)) {
                $dados = $this->request->data;
                $curriculo_id = $this->Curriculo->id;
                $nome_arquivo = $this->Curriculo->find('first', array('conditions' => array('Curriculo.id' => $curriculo_id)));

                try {
                    App::import('Component', 'EmailTemplate');
                    $EmailTemplate = new EmailTemplateComponent();
                    $EmailTemplate->EmailTrabalheConosco($dados, $curriculo_id, $nome_arquivo['Curriculo']['curriculo']);
                    exit("true");
                } catch (Exception $e) {
                    exit(debug($e->getMessage()));
                }
            }
        }
    }

}
