<?php

Router::connect('/js/imgadmin/admin.js', array('plugin' => 'Imgadmin', 'controller' => 'Javascripts', 'action' => 'admin'));

Router::connect('/imgadmin/Imagens/:action', array('plugin' => 'Imgadmin', 'controller' => 'Imagens'));
