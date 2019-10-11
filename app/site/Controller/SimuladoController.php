<?php

error_reporting(0);
ini_set("display_errors", 1);

App::uses('AppController', 'Controller');

class SimuladoController extends AppController {

    public $components = array('Paginator');
    public $uses = array('Imovel', 'Album', 'AlbunsImagem', 'AlbunsVideo');

    public function index($slug_status = "") {
        $this->Imovel->ImoveisTipo->recursive = -1;
        $imoveisTipos = $this->Imovel->ImoveisTipo->find('all', array("fields" => array("nome", "slug")));
        $this->set(compact('imoveisTipos'));

        $fields_imoveis = array(
            'Imovel.id',
            'Imovel.slug',
            'Imovel.prova_aplicada',
            'Imovel.introducao',
            'Imovel.pergunta',
            'Imovel.imagem',
            'Imovel.texto',
            'Imovel.alternativa_1',
            'Imovel.alternativa_2',
            'Imovel.alternativa_3',
            'Imovel.alternativa_4',
            'Imovel.alternativa_5',
            'ImoveisTipo.nome');

            if (!empty($slug_status)) {

            $this->set('slug_status', $slug_status);

            $conditions = array();

            $this->paginate = array(
                'order' => array(
                    'Imovel.created' => 'desc',
                ),
                'conditions' => $conditions,
                'fields' => $fields_imoveis,
                'limit' => 20
            );
            $this->set('imoveis', $this->Paginator->paginate());
       
            } else {

            if (!empty($this->request->query["query"])) {
                $conditions_or["Imovel.nome LIKE"] = "%" . $this->request->query["query"] . "%";

                $conditions_or["Imovel.descricao LIKE"] = "%" . $this->request->query["query"] . "%";

                //$conditions_or["Cidade.nome LIKE"] = "%" . $this->request->query["query"] . "%";

                $conditions = array('OR' => $conditions_or);
            }


            if (!empty($this->request->query["tipo"])) {
                $conditions["ImoveisTipo.slug"] = $this->request->query["tipo"];
            }

            $this->paginate = array(
                'order' => array(
                    'Imovel.created' => 'desc',
                ),
                'conditions' => $conditions,
                'fields' => $fields_imoveis,
                'limit' => 12
            );

            $this->set('imoveis', $this->Paginator->paginate());
        }
    }
}