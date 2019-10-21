<?php
App::uses('AppModel', 'Model');
/**
 * Equipe Model
 *
 */
class Depoimento extends AppModel {

	public $imagem_upload = null;
	public $displayField = 'nome';

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

	}

	public function afterSave($created = true, $options = null) {

	}

}