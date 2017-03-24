<?php
App::uses('AlbunsAnimal', 'Model');

/**
 * AlbunsAnimal Test Case
 *
 */
class AlbunsAnimalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.albuns_animal',
		'app.animal',
		'app.album'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlbunsAnimal = ClassRegistry::init('AlbunsAnimal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlbunsAnimal);

		parent::tearDown();
	}

}
