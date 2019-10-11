<?php
App::uses('AppModel', 'Model');
/**
 * MateriasTipo Model
 *
 * @property Questao $Questao
 */
class MateriasTipo extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $displayField = 'nome';
    public $hasMany = array(
        'Questao' => array(
        'className' => 'Questao',
        'foreignKey' => 'materias_tipo_id',
        'dependent' => false,
        'conditions' => '',
        'fields' => '',
        'order' => '',
        'limit' => '',
        'offset' => '',
        'exclusive' => '',
        'finderQuery' => '',
        'counterQuery' => ''
        )
    );
}