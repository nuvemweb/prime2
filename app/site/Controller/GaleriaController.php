<?php

App::uses('AppController', 'Controller');

class GaleriaController extends AppController {

	public $components = array('Paginator');

	public $uses = array('Anuncio');

    public function index() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

    	$this->Anuncio->recursive = 0;
		$this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1)));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
    	
    }
    public function animais() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "animais")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }
    public function automoveis() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "automoveis")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }
    public function bicicletas() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "bicicletas")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }
    public function caminhoes() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "caminhoes")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function celulares() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "celulares")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function computadores() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "computadores")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }
    public function construcao() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "construcao")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function diversos() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "diversos")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function eletrodomesticos() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "eletrodomesticos")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function empregos() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "empregos")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function imoveisalugar() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "imoveisalugar")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

     public function imoveisvenda() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "imoveisvenda")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function maquinas() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "maquinas")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function motos() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "motos")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function multimidia() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "multimidia")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

    public function servicos() {

         $this->Paginator->settings = array(
      'limit' => 6
      );

      $this->Anuncio->recursive = 0;
    $this->set('Anuncios', $this->Paginator->paginate(array('liberado' => 1, 'categoria' => "servicos")));
        $Computadores = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));

        $this->set(compact('Anuncios'));
        $this->set(compact('Computadores'));
      
    }

}