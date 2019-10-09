<?php
App::uses('AppModel', 'Model');
/**
 * Imovel Model
 *
 * @property ImoveisTipo $ImoveisTipo
 * @property Bairro $Bairro
 * @property ImoveisStatus $ImoveisStatus
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
            )
    );
}