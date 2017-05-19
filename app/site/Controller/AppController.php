<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $uses = array('Publicidade');
    
    public $helpers = array('Data', 'Link', 'RenderElement','FormAdmin');
    public $slug_idioma;


  
   

    public function beforeFilter() {
     
       

   
        
    }

    public function beforeRender() {

     $Publicidades  = $this->Publicidade->find('all');

 


     $this->set(compact('Publicidades'));
    }

   



}
