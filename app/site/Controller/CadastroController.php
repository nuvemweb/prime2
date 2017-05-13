<?php

App::uses('AppController', 'Controller');


class CadastroController extends AppController {


    public function index() {

        if ($this->request->is('post')) {
            $this->Cadastro->create();
            if ($this->Cadastro->save($this->request->data)) {
                $this->Session->setFlash('Cadastrado Com Sucesso!', 'default', array('class' => 'alert alert-success space'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
            }
        }
    	
    }

    public function cadastrar() {

        
        
    }

}