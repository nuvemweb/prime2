<?php
App::uses('AppController', 'Controller');
/**
 * Animais Controller
 *
 * @property Animal $Animal
 * @property PaginatorComponent $Paginator
 */
class AnunciosController extends AppController {

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
		$this->Anuncio->recursive = 0;
		$this->set('anuncios', $this->Paginator->paginate(array('liberado' => 0)));
	}

	public function index2() {
		$this->Anuncio->recursive = 0;
		$this->set('anuncios', $this->Paginator->paginate(array('liberado' => 1)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Anuncio->exists($id)) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$options = array('conditions' => array('Anuncio.' . $this->Anuncio->primaryKey => $id));
		$this->set('anuncio', $this->Anuncio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Anuncio->create();
			if ($this->Anuncio->save($this->request->data)) {
				$this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
				return $this->redirect(array('action' => 'add'));
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
		
		if (!$this->Anuncio->exists($id)) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Anuncio->save($this->request->data)) {
				$this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
			}
		} else {
			$options = array('conditions' => array('Anuncio.' . $this->Anuncio->primaryKey => $id));
			$this->request->data = $this->Anuncio->find('first', $options);
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
		$this->Anuncio->id = $id;
		if (!$this->Anuncio->exists()) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Anuncio->delete()) {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		} else {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
