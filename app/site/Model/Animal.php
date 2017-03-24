<?php
App::uses('AppModel', 'Model');
/**
 * Animal Model
 *
 * @property Album $Album
 */
class Animal extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Album' => array(
			'className' => 'AlbunsAnimal',
			'joinTable' => 'albuns_animais',
			'foreignKey' => 'animal_id',
			//'associationForeignKey' => 'album_id',
			//'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => 'ordem ASC',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
}