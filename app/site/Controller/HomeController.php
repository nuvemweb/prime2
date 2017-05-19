<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public $uses = array('Anuncio');	

    public function index() {

    	$this->Anuncio->recursive = 0;

		$Anuncios = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));
		
		

		$this->set(compact('Anuncios'));

		

		

    }

}
