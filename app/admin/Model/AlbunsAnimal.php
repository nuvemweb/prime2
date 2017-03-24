<?php
App::uses('AppModel', 'Model');
/**
 * AlbunsAnimal Model
 *
 * @property Animal $Animal
 */
class AlbunsAnimal extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Animal' => array(
			'className' => 'Animal',
			'foreignKey' => 'animal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	    public $imagem_upload = null;
    public $validate = array(
        'animal_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
    );

    public function beforeSave($options = null) {

        //INICIO - Editar - Método de upload para pastas com ID 
        if (!empty($this->data[$this->alias]['id'])) {

            if (!empty($this->data[$this->alias]['imagem'])) {
            }
            $this->imagem_upload = $this->data[$this->alias]['imagem'];
            //$this->imagem_upload = $this->data[$this->alias]['imagem'];
            unset($this->data[$this->alias]['imagem']);
            if (!empty($this->imagem_upload) && !empty($this->imagem_upload['name'])) {
                App::import('Component', 'Upload');
                $Upload = new UploadComponent();
                $tamanhos = array(
                    '250' => '184',
                    '800' => '600',
                );
                $this->data[$this->alias]['imagem'] = $Upload->upload($this->imagem_upload, "upload" . DS . "animal" . DS . $this->data["AlbunsImagem"]['album_id'] . DS, false, $tamanhos);
            }
        }
        //FIM - Editar - Método de upload para pastas com ID 
        return true;
    }

}
