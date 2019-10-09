<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * User Model
 *
 */
class User extends AppModel {

    public $imagem_upload = null;
    public $useTable = 'usuarios';
    public $name = 'User';
    public $validate = array(
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty', 'email'),
                'message' => 'A e-mail é obrigatório'
            ),
            'minLength' => array(
                "rule" => array("minLength", 5),
                "message" => "Mínimo de 5 caracteres"
            ),
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            'tamanho' => array(
                "rule" => array("between", 5, 22),
                "message" => "Tamanho entre 5 e 22 caracteres"
            ),
        )
    );
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'home', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'home', 'action' => 'inde')
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
            );
        }

        //INICIO - Editar - Método de upload para pastas com ID 
        if (!empty($this->data[$this->alias]['id'])) {
            $this->imagem_upload = $this->data[$this->alias]['imagem'];
            unset($this->data[$this->alias]['imagem']);
            if (!empty($this->imagem_upload) && !empty($this->imagem_upload['name'])) {
                App::import('Component', 'Upload');
                $Upload = new UploadComponent();
                $this->data[$this->alias]['imagem'] = $Upload->upload($this->imagem_upload, "upload" . DS . "users" . DS . $this->data[$this->alias]['id'] . DS, true);
            }
        } else {
            $this->imagem_upload = $this->data[$this->alias]['imagem'];
            $this->data[$this->alias]['imagem'] = "";
        }
        //FIM - Editar - Método de upload para pastas com ID 

        return true;
    }

    public function afterSave($created = true, $options = null) {
        //INICIO - Adicionar - Método de upload para pastas com ID 
        if (!empty($this->imagem_upload)) {
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
        }
        //Fim - Adicionar - Método de upload para pastas com ID 
    }

}
