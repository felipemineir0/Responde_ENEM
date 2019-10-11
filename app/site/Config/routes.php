<?php
Router::connect('/', array('controller' => 'home'));
Router::connect('/contato', array('controller' => 'contato'));
Router::connect('/contatos', array('controller' => 'contato'));
Router::connect('/fale-conosco', array('controller' => 'contato'));
Router::connect('/faleconosco', array('controller' => 'contato'));
Router::connect('/Institucional', array('controller' => 'Institucional'));
Router::connect('/simulado', array('controller' => 'simulado'));
Router::connect('/simulados', array('controller' => 'simulado'));
CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';