<?php

App::uses('AppModel', 'Model');

/**
 * Imovel Model
 *
 * @property ImoveisTipo $ImoveisTipo
 * @property Resposta $Resposta
 */
class Imovel extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $imagem_upload = null;
    public $displayField = 'nome';
    public $belongsTo = array(
        'ImoveisTipo' => array(
            'className' => 'ImoveisTipo',
            'foreignKey' => 'imoveis_tipo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
            ),
        'Resposta' => array(
            'className' => 'Resposta',
            'foreignKey' => 'alternativa_resposta_id',
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
                $tamanhos = array(
                    "278" => "174"
                    );
                $this->data[$this->alias]['imagem'] = $Upload->upload($this->imagem_upload, "upload" . DS . "imoveis" . DS . $this->data[$this->alias]['id'] . DS, false, $tamanhos, true);
            }
        } else {
            $this->imagem_upload = $this->data[$this->alias]['imagem'];
            $this->data[$this->alias]['imagem'] = "";
        }
        //FIM - Editar - Método de upload para pastas com ID 
    }

    public function afterSave($created = true, $options = null) {
        //INICIO - Adicionar - MÃ©todo de upload para pastas com ID 
        if ($this->imagem_upload["name"] != "") {
            $imagem_salva = $this->find("first", array(
                'conditions' => array($this->alias . ".id =" => $this->data[$this->alias]['id']),
                'fields' => array($this->alias . '.imagem')
                ));
            if ($imagem_salva[$this->alias]["imagem"] == "") {
                $this->data[$this->alias]['imagem'] = $this->imagem_upload;
                $this->save($this->data);
            } else {
                return;
            }
        }
        //Fim - Adicionar - Método de upload para pastas com ID 
    }
}