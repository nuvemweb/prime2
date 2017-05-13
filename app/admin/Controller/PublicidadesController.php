<?php

App::uses('AppController', 'Controller');

/**
 * Destaques Controller
 *
 * @property Destaque $Destaque
 * @property PaginatorComponent $Paginator
 */
class PublicidadesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Publicidade->recursive = 0;
        $this->set('publicidades', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Publicidade->exists($id)) {
            $this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
            return $this->redirect(array('action' => 'index'));
        }
        $options = array('conditions' => array('Publicidade.' . $this->Publicidade->primaryKey => $id));
        $this->set('publicidade', $this->Publicidade->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Publicidade->create();
            if ($this->Publicidade->save($this->request->data)) {
                $this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Publicidade->exists($id)) {
            $this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Publicidade->save($this->request->data)) {
                $this->Session->setFlash('Registro editado com sucesso!', 'default', array('class' => 'alert alert-success space'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
            }
        } else {
            $options = array('conditions' => array('Publicidade.' . $this->Publicidade->primaryKey => $id));
            $this->request->data = $this->Publicidade->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Publicidade->id = $id;
        if (!$this->Publicidade->exists()) {
            $this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Publicidade->delete()) {
            $this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
        } else {
            $this->Session->setFlash('Registro não pode ser excluído. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
