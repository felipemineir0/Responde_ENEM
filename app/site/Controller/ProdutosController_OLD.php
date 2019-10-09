<?php

App::uses('AppController', 'Controller');

class ProdutosController extends AppController {
    public $uses = array('Galeria');

    public function index() {
        
        $galerias = $this->Galeria->find("all", array('order' => array('data' => 'desc')));

        $this->set(compact('galerias'));

    }

    /*public function view($id = null){

        $destak = $this->Galeria->find("first", array("conditions" => array("Galeria.id" => $id)));

        //Albuns
        #$this->Album->recursive = 1;
        #$this->AlbunsImagem->recursive = -1;
        #$this->AlbunsVideo->recursive = -1;

        $albuns = $this->Album->find("all", array(
            "conditions" => array("Album.albuns_tipo_id" => 2, "Album.codigo_fk" => $destak['Galeria']['id']),
            "fields" => array("Album.nome", "Album.id", "Album.video"),
        ));

        $this->set('title_for_layout', $destak['Galeria']['nome']);
        //$this->set(compact('destak', 'albuns'));

    }*/

}