<?php
Router::connect('/', array('controller' => 'Users', 'action' => 'login'));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';