<?php

error_reporting(0);
ini_set("display_errors", 1);

App::uses('AppController', 'Controller');

class SimuladoController extends AppController {

    public $components = array('Paginator');
    public $uses = array('Questao', );

    public function index($slug_status = "") {
        $this->Questao->MateriasTipo->recursive = -1;
        $materiasTipos = $this->Questao->MateriasTipo->find('all', array("fields" => array("nome", "slug")));
        $topicosTipos = $this->Questao->TopicosTipo->find('all', array("fields" => array("nome")));
        $this->set(compact('materiasTipos','topicosTipos'));

        $fields_questoes = array(
            'Questao.id',
            'Questao.slug',
            'Questao.prova_aplicada',
            'Questao.introducao',
            'Questao.pergunta',
            'Questao.imagem',
            'Questao.texto',
            'Questao.alternativa_A',
            'Questao.alternativa_B',
            'Questao.alternativa_C',
            'Questao.alternativa_D',
            'Questao.alternativa_E',
            'Questao.link_estudo',
            'Questao.alternativa_resposta_id',
            'MateriasTipo.nome',
            'TopicosTipo.link_de_estudo' );

            if (!empty($slug_status)) {

            $this->set('slug_status', $slug_status);

            $conditions = array();

            $this->set('questoes', $this->Paginator->paginate());
       
            } else {

            if (!empty($this->request->query["query"])) {
                $conditions_or["Questao.nome LIKE"] = "%" . $this->request->query["query"] . "%";

                $conditions_or["Questao.descricao LIKE"] = "%" . $this->request->query["query"] . "%";

                $conditions = array('OR' => $conditions_or);
            }


            if (!empty($this->request->query["tipo"])) {
                $conditions["MateriasTipo.slug"] = $this->request->query["tipo"];
            }

            $this->paginate = array(
                'order' => 'RAND()',
                'conditions' => $conditions,
                'fields' => $fields_questoes,
                'limit' => 10
            );

            $this->set('questoes', $this->Paginator->paginate());
        }
    }

    public function beforeFilter() {
        $this->Auth->allow(array('index'));
    }
}