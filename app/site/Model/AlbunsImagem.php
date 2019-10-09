<?php

App::uses('AppModel', 'Model');

/**
 * AlbunsImagem Model
 *
 * @property Album $Album
 */
class AlbunsImagem extends AppModel {

    public $imagem_upload = null;
    public $validate = array(
        'album_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
    );
    public $belongsTo = array(
        'Album' => array(
            'className' => 'Album',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
            )
    );

    public function beforeSave($options = null) {

        //INICIO - Editar - Método de upload para pastas com ID 
        if (!empty($this->data[$this->alias]['id'])) {

            if (!empty($this->data[$this->alias]['imagem'])) {
            }
            $this->imagem_upload = $this->data[$this->alias]['imagem'];
            //$this->imagem_upload = $this->data[$this->alias]['imagem'];
            unset($this->data[$this->alias]['imagem']);
            if (!empty($this->imagem_upload) && !empty($this->imagem_upload['name'])) {
                App::import('Component', 'Upload');
                $Upload = new UploadComponent();
                $tamanhos = array(
                    "350" => "237",
                    "248" => "186",
                    "195" => "150"
                    );
                $this->data[$this->alias]['imagem'] = $Upload->upload($this->imagem_upload, "upload" . DS . "albuns" . DS . $this->data["AlbunsImagem"]['album_id'] . DS, false, $tamanhos);
            }
        }
        //FIM - Editar - Método de upload para pastas com ID 
        return true;
    }

}
