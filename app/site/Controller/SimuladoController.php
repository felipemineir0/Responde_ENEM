<?php

error_reporting(0);
ini_set("display_errors", 1);

App::uses('AppController', 'Controller');

class SimuladoController extends AppController {

    public $components = array('Paginator');
    public $uses = array('Questao', 'Album', 'AlbunsImagem', 'AlbunsVideo');

    public function index($slug_status = "") {
        $this->Questao->MateriasTipo->recursive = -1;
        $materiasTipos = $this->Questao->MateriasTipo->find('all', array("fields" => array("nome", "slug")));
        $this->set(compact('materiasTipos'));

        $fields_questoes = array(
            'Questao.id',
            'Questao.slug',
            'Questao.prova_aplicada',
            'Questao.introducao',
            'Questao.pergunta',
            'Questao.imagem',
            'Questao.texto',
            'Questao.alternativa_1',
            'Questao.alternativa_2',
            'Questao.alternativa_3',
            'Questao.alternativa_4',
            'Questao.alternativa_5',
            'Questao.link_estudo',
            'Questao.alternativa_resposta_id',
            'MateriasTipo.nome');

            if (!empty($slug_status)) {

            $this->set('slug_status', $slug_status);

            $conditions = array();

            $this->set('questoes', $this->Paginator->paginate());
       
            } else {

            if (!empty($this->request->query["query"])) {
                $conditions_or["Questao.nome LIKE"] = "%" . $this->request->query["query"] . "%";

                $conditions_or["Questao.descricao LIKE"] = "%" . $this->request->query["query"] . "%";

                //$conditions_or["Cidade.nome LIKE"] = "%" . $this->request->query["query"] . "%";

                $conditions = array('OR' => $conditions_or);
            }


            if (!empty($this->request->query["tipo"])) {
                $conditions["MateriasTipo.slug"] = $this->request->query["tipo"];
            }

            $this->paginate = array(
                'order' => array(
                    'Questao.created' => 'desc',
                ),
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