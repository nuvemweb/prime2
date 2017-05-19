<?php

Router::connect('/', array('controller' => 'home', 'action' => 'index'));
Router::connect('/site', array('controller' => 'home', 'action' => 'index'));
Router::connect('/site/', array('controller' => 'home', 'action' => 'index'));
Router::connect('/site/galeria', array('controller' => 'galeria', 'action' => 'index'));
Router::connect('/admin/users', array('controller' => 'users', 'action' => 'index'));
Router::connect('/admin/users/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/admin/users/cadastrar', array('controller' => 'users', 'action' => 'cadastrar'));
Router::connect('/site/contato', array('controller' => 'contato', 'action' => 'index'));
Router::connect('/site/galeria/view', array('controller' => 'galeria', 'action' => 'view'));
Router::connect('/site/galeria/view/', array('controller' => 'galeria', 'action' => 'view'));
Router::connect('/site/galeria/animais', array('controller' => 'galeria', 'action' => 'animais'));
Router::connect('/site/galeria/automoveis', array('controller' => 'galeria', 'action' => 'automoveis'));
Router::connect('/site/galeria/bicicletas', array('controller' => 'galeria', 'action' => 'bicicletas'));
Router::connect('/site/galeria/caminhoes', array('controller' => 'galeria', 'action' => 'caminhoes'));
Router::connect('/site/galeria/celulares', array('controller' => 'galeria', 'action' => 'celulares'));
Router::connect('/site/galeria/computadores', array('controller' => 'galeria', 'action' => 'computadores'));
Router::connect('/site/galeria/construcao', array('controller' => 'galeria', 'action' => 'construcao'));
Router::connect('/site/galeria/diversos', array('controller' => 'galeria', 'action' => 'diversos'));
Router::connect('/site/galeria/eletrodomesticos', array('controller' => 'galeria', 'action' => 'eletrodomesticos'));
Router::connect('/site/galeria/empregos', array('controller' => 'galeria', 'action' => 'empregos'));
Router::connect('/site/galeria/imoveisalugar', array('controller' => 'galeria', 'action' => 'imoveisalugar'));
Router::connect('/site/galeria/imoveisvenda', array('controller' => 'galeria', 'action' => 'imoveisvenda'));
Router::connect('/site/galeria/maquijnas', array('controller' => 'galeria', 'action' => 'maquinas'));
Router::connect('/site/galeria/motos', array('controller' => 'galeria', 'action' => 'motos'));
Router::connect('/site/galeria/multimidia', array('controller' => 'galeria', 'action' => 'multimidia'));
Router::connect('/site/galeria/servicos', array('controller' => 'galeria', 'action' => 'servicos'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/paginas/:slug_pagina', array('controller' => 'paginas', 'action' => 'index'), array('pass' => array("slug_pagina")));



CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
