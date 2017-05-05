<?php

Router::connect('/', array('controller' => 'home', 'action' => 'index'));
Router::connect('/site/galeria', array('controller' => 'galeria', 'action' => 'index'));
Router::connect('/site/faleconosco', array('controller' => 'faleconosco', 'action' => 'index'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/paginas/:slug_pagina', array('controller' => 'paginas', 'action' => 'index'), array('pass' => array("slug_pagina")));



CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
