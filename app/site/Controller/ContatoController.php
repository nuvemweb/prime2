<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ContatoController extends AppController {

	public $uses = array('Anuncio');	

    public function index() {

    	
		if ($this->request->is('ajax') || $this->request->is('post')) {
            try {

                App::import('Component', 'EmailTemplate');
                $EmailTemplate = new EmailTemplateComponent();
                //exit(debug($this->request->data));
                $EmailTemplate->EmailContato($this->request->data);
                exit("true");
            } catch (Exception $e) {
                //exit(debug($e->getMessage()));
                echo "Exceção pega: ", $e->getMessage(), "\n";
            }
        }

    	$Anuncios = $this->Anuncio->find("all", array('conditions' => array('liberado' => 1), 'order' => array('created' => 'desc')));
		
		

		$this->set(compact('Anuncios'));

    }

}