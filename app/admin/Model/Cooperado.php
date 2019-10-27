<?php
App::uses('AppModel', 'Model');
//App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * Cooperado Model
 *
 */
class Cooperado extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
public $validate = array(
	'nome' => array(
		'notEmpty' => array(
			'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	'email' => array(
		'email' => array(
			'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	'password' => array(
            //'required' => array(
            //    'rule' => array('notEmpty'),
            //    'message' => 'A password is required'
            //),
		'tamanho' => array(
			"rule" => array("between", 5, 22),
			"message" => "Tamanho entre 5 e 22 caracteres"
			),
		),
	'matricula' => array(
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



public function beforeSave($options = null) {

	if (isset($this->data[$this->alias]['password'])) {
		$this->data[$this->alias]['password'] = sha1($this->data[$this->alias]['password']);
	}

	return true;
}

}
