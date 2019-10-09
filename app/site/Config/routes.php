<?php
Router::connect('/', array('controller' => 'home'));
//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/Institucional', array('controller' => 'Institucional'));
Router::connect('/Servicos',array('controller'=>'Servicos'));
Router::connect('/produtos', array('controller' => 'negocios'));
//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
//Router::connect('/paginas/:slug_pagina', array('controller' => 'paginas', 'action' => 'index'), array('pass' => array("slug_pagina")));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
