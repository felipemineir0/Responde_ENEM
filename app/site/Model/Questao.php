<?php
App::uses('AppModel', 'Model');
/**
 * Questao Model
 *
 * @property MateriasTipo $MateriasTipo
 */
class Questao extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $imagem_upload = null;
    public $displayField = 'nome';
    public $belongsTo = array(
        'MateriasTipo' => array(
        'className' => 'MateriasTipo',
        'foreignKey' => 'materias_tipo_id',
        'conditions' => '',
        'fields' => '',
        'order' => ''
        )
    );
}