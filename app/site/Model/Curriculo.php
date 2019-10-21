<?php
App::uses('AppModel', 'Model');

class Curriculo extends AppModel {

    public $curriculo_upload = null;

    public function beforeSave($options = null) {
        //INICIO - Editar - Método de upload para pastas com ID 
        if (!empty($this->data[$this->alias]['id'])) {
            $this->curriculo_upload = $this->data[$this->alias]['curriculo'];
            unset($this->data[$this->alias]['curriculo']);
            if (!empty($this->curriculo_upload) && !empty($this->curriculo_upload['name'])) {
                App::import('Component', 'Upload');
                $Upload = new UploadComponent();
                $tamanhos = array();
                $this->data[$this->alias]['curriculo'] = $Upload->uploadArquivo($this->curriculo_upload, "upload" . DS . "curriculos" . DS . $this->data[$this->alias]['id'] . DS, false, $tamanhos, true);
            }
        } else {
            $this->curriculo_upload = $this->data[$this->alias]['curriculo'];
            $this->data[$this->alias]['curriculo'] = "";
        }
        //FIM - Editar - Método de upload para pastas com ID 
    }

    public function afterSave($created = true, $options = null) {
        //INICIO - Adicionar - Método de upload para pastas com ID 
        if ($this->curriculo_upload["name"] != "") {
            $curriculo_salva = $this->find("first", array(
                'conditions' => array($this->alias . ".id =" => $this->data[$this->alias]['id']),
                'fields' => array($this->alias . '.curriculo')
            ));
            if ($curriculo_salva[$this->alias]["curriculo"] == "") {
                $this->data[$this->alias]['curriculo'] = $this->curriculo_upload;
                $this->save($this->data);
            } else {
                return;
            }
        }
        //Fim - Adicionar - Método de upload para pastas com ID 
    }
}
