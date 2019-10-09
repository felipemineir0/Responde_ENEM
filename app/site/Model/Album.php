<?php

App::uses('AppModel', 'Model');

/**
 * Album Model
 *
 * @property AlbunsTipos $AlbunsTipos
 */
class Album extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nome';
    public $imagem_upload = null;

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'albuns_tipo_id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'video' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'nome' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'AlbunsTipo' => array(
            'className' => 'AlbunsTipo',
            'foreignKey' => 'albuns_tipo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    public $hasMany = array(
        'AlbunsImagem' => array(
            'className' => 'AlbunsImagem',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'AlbunsVideo' => array(
            'className' => 'AlbunsVideo',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public function beforeSave($options = null) {

        if (!empty($this->data[$this->alias]['nome'])) {
            if (empty($this->data[$this->alias]['slug'])) {
                $slug = strtolower(Inflector::slug($this->data[$this->alias]['nome'], "-"));
                if (!empty($this->data[$this->alias]['id'])) {
                    $count_slugs = $this->find("count", array(
                        'conditions' => array($this->alias . '.slug like' => $slug, $this->alias . ".id <>" => $this->data[$this->alias]['id']),
                        'fields' => array($this->alias . '.slug')
                    ));
                } else {
                    $count_slugs = $this->find("count", array(
                        'conditions' => array($this->alias . '.slug like' => $slug),
                        'fields' => array($this->alias . '.slug')
                    ));
                }

                $contador = 1;
                while ($count_slugs > 0) {
                    $contador++;

                    $slug .= '-' . $contador;
                    $count_slugs = $this->find("count", array(
                        'conditions' => array($this->alias . '.slug like' => $slug),
                        'fields' => array($this->alias . '.slug')
                    ));
                }
                $this->data[$this->alias]['slug'] = $slug;
            }
        }
        //INICIO - Editar - Método de upload para pastas com ID 
        if (!empty($this->data[$this->alias]['id'])) {
            $this->imagem_upload = $this->data[$this->alias]['imagem'];
            unset($this->data[$this->alias]['imagem']);
            if (!empty($this->imagem_upload) && !empty($this->imagem_upload['name'])) {
                App::import('Component', 'Upload');
                $Upload = new UploadComponent();
                $this->data[$this->alias]['imagem'] = $Upload->upload($this->imagem_upload, "upload" . DS . "albuns" . DS . $this->data[$this->alias]['id'] . DS);
            }
        } else {
            $this->imagem_upload = $this->data[$this->alias]['imagem'];
            $this->data[$this->alias]['imagem'] = "";
        }
        //FIM - Editar - Método de upload para pastas com ID 
    }

    public function afterSave($created = true, $options = null) {
        //INICIO - Adicionar - Método de upload para pastas com ID 
        $imagem_salva = $this->find("first", array(
            'conditions' => array($this->alias . ".id =" => $this->data[$this->alias]['id']),
            'fields' => array($this->alias . '.imagem')
        ));
        if ($imagem_salva[$this->alias]["imagem"] == "" && $this->imagem_upload["name"] != "") {
            $this->data[$this->alias]['imagem'] = $this->imagem_upload;
            $this->save($this->data);
        } else {
            return;
        }
        //Fim - Adicionar - Método de upload para pastas com ID 
    }

}
