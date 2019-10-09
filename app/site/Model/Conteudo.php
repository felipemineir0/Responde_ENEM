<?php
App::uses('AppModel', 'Model');
/**
 * Conteudo Model
 *
 * @property ConteudoCategoria $ConteudoCategoria
 */
class Conteudo extends AppModel {

	public $imagem_upload = null;
	public $displayField = 'nome';

	 public $hasMany = array(
        'ConteudoFoto' => array(
            'className' => 'ConteudoFoto',
        )
    );

}