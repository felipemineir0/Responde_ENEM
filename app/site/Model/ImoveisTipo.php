<?php
App::uses('AppModel', 'Model');
/**
 * ImoveisTipo Model
 *
 * @property Imovel $Imovel
 */
class ImoveisTipo extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $displayField = 'nome';
    public $hasMany = array(
        'Imovel' => array(
            'className' => 'Imovel',
            'foreignKey' => 'imoveis_tipo_id',
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