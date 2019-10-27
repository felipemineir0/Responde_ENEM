<?php
Router::connect('/', array('controller' => 'Users', 'action' => 'login'));
Router::connect('/usuario_comum', array('controller' => 'cooperados', 'action' => 'index'));
Router::connect('/usuario_comum/edit', array('controller' => 'cooperados', 'action' => 'edit'));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';