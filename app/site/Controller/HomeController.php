<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public $uses = array('Anuncio');	

    public function index() {
		$Anuncios = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1)));

		$Anunciosultimos = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'limit'=>"4", 'order' => array('created' => 'desc')));

		$this->set(compact('Anuncios'));
		$this->set(compact('Anunciosultimos'));

		

    }

}
