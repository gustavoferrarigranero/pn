<?php
App::uses('TbOlheiro', 'Model');

/**
 * TbOlheiro Test Case
 *
 */
class TbOlheiroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tb_olheiro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TbOlheiro = ClassRegistry::init('TbOlheiro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TbOlheiro);

		parent::tearDown();
	}

}
