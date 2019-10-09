<?php

class EmailConfig {

    public $default = array(
        'transport' => 'Mail',
        'from' => '',
        'charset' => 'utf-8',
    );
    
    public $smtp = array(
        'transport' => 'Smtp',
        'host' => 'smtp.uhserver.com',
        'port' => 587,
        'timeout' => 30,
        'from' => 'contato@.com.br',
        'username' => 'contato@.com.br',
        'password' => '',
        'client' => null,
        'log' => true,
        'emailFormat' => "html"
    );
}