<?php
App::uses('AppController', 'Controller');
/**
 * AlbunsAnimais Controller
 *
 * @property AlbunsAnimal $AlbunsAnimal
 * @property PaginatorComponent $Paginator
 */
class AlbunsAnimaisController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $imagem_upload = "";

	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		if (empty($id)) {
            return $this->redirect("/");
        }

        $this->paginate = array('order' => array('ordem' => 'asc',), 'limit' => 100, 'conditions' => array('AlbunsAnimal.animal_id' => $id),);

		$this->set('albunsAnimais', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AlbunsAnimal->exists($id)) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$options = array('conditions' => array('AlbunsAnimal.' . $this->AlbunsAnimal->primaryKey => $id));
		$this->set('albunsAnimal', $this->AlbunsAnimal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 
	public function add() {
		if (empty($id)) {
            return $this->redirect("/");
        }
		if ($this->request->is('post')) {
			$this->AlbunsAnimal->create();
			if ($this->AlbunsAnimal->save($this->request->data)) {
				$this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
			}
		}
		$animais = $this->AlbunsAnimal->Animal->find('list');
		$this->set(compact('animais'));
	}*/
	public function add($id = null) {
        if (empty($id)) {
            return $this->redirect("/");
        }
        if ($this->request->is('post')) {

            foreach ($this->request->data["AlbunsAnimal"]['files'] as $value) {

                $this->imagem_upload = $value;
                if (!empty($this->imagem_upload) && !empty($this->imagem_upload['name'])) {
                    App::import('Component', 'Upload');
                    $Upload = new UploadComponent();
                    $tamanhos = array(
                        "250" => "184",
                        "800" => "600",
                        );
                    $this->request->data["AlbunsAnimal"]['imagem'] = $Upload->upload($this->imagem_upload, "upload" . DS . "album_animal" . DS . $this->request->data["AlbunsAnimal"]['animal_id'] . DS, false, $tamanhos);

                    unset($this->request->data["AlbunsAnimal"]['files']);

                    if ($this->request->data["AlbunsAnimal"]['imagem'] != "") {

                        $this->AlbunsAnimal->create();
                        if ($this->AlbunsAnimal->save($this->request->data)) {
                            $this->Session->setFlash('Registro salvo com sucesso!', 'default', array('class' => 'alert alert-success space'));
                        } else {
                            $this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
                        }
                    }
                }
            }
            return $this->redirect(array('action' => 'index', $this->request->data["AlbunsAnimal"]['animal_id']));
        }
		$this->loadModel('Animal');
        $albuns = $this->Animal->find('list', array("conditions" => array("id" => $id)));
        //debug($albuns);
        $this->set(compact('albuns'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        if (!$this->AlbunsAnimal->exists($id)) {
            throw new NotFoundException(__('Inválido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->AlbunsAnimal->save($this->request->data)) {
                $this->Session->setFlash('Registro editado com sucesso!', 'default', array('class' => 'alert alert-success space'));
                return $this->redirect(array('action' => 'index', $this->request->data["AlbunsAnimal"]['album_id']));
            } else {
                $this->Session->setFlash('Registro não pode ser salvo. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
            }
        } else {
            $options = array('conditions' => array('AlbunsAnimal.' . $this->AlbunsAnimal->primaryKey => $id));
            $this->request->data = $this->AlbunsAnimal->find('first', $options);
        }

        $albuns = $this->AlbunsAnimal->Animal->find('list', array("conditions" => array("Animal.id" => $this->request->data["AlbunsAnimal"]["animal_id"])));
        $this->set(compact('albuns'));
    }

    public function changeOrdem() {

        if ($this->request->is(array('post', 'put'))) {

            $imagem = $this->AlbunsAnimal->find("first",array("conditions"=>array("AlbunsAnimal.id"=>$this->request->data["id"])));

            if (!empty($imagem)) {
                $imagem["AlbunsAnimal"]["ordem"] = $this->request->data["ordem"];

                if ($this->AlbunsAnimal->save($this->request->data)) {
                    //$this->Session->setFlash(__('The albuns video has been saved.'));
                    //return $this->redirect(array('action' => 'index', $this->request->data["AlbunsImagem"]['album_id']));
                    exit();
                } else {
                    exit();
                   // $this->Session->setFlash(__('The albuns video could not be saved. Please, try again.'));
                }

                exit();
            }
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
		$this->AlbunsAnimal->id = $id;
		if (!$this->AlbunsAnimal->exists()) {
			$this->Session->setFlash('Registro não encontrado.', 'default', array('class' => 'alert alert-danger space'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AlbunsAnimal->delete()) {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		} else {
			$this->Session->setFlash('Registro excluído com sucesso!', 'default', array('class' => 'alert alert-success space'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
