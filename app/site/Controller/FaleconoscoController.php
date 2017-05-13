<?php

App::uses('AppController', 'Controller');

class FaleconoscoController extends AppController {

	public $uses = array('Anuncio');	

    public function index() {

    	$Anuncios = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));
		
		

		$this->set(compact('Anuncios'));
    }

}