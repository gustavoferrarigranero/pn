<?php
App::uses('AppController', 'Controller');
/**
 * TbOlheiros Controller
 *
 * @property TbOlheiro $TbOlheiro
 * @property PaginatorComponent $Paginator
 */
class TbOlheirosController extends AppController {

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
		$this->TbOlheiro->recursive = 0;
		$this->set('tbOlheiros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TbOlheiro->exists($id)) {
			throw new NotFoundException(__('Invalid tb olheiro'));
		}
		$options = array('conditions' => array('TbOlheiro.' . $this->TbOlheiro->primaryKey => $id));
		$this->set('tbOlheiro', $this->TbOlheiro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TbOlheiro->create();
			if ($this->TbOlheiro->save($this->request->data)) {
				$this->Session->setFlash(__('The tb olheiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tb olheiro could not be saved. Please, try again.'));
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
		if (!$this->TbOlheiro->exists($id)) {
			throw new NotFoundException(__('Invalid tb olheiro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TbOlheiro->save($this->request->data)) {
				$this->Session->setFlash(__('The tb olheiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tb olheiro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TbOlheiro.' . $this->TbOlheiro->primaryKey => $id));
			$this->request->data = $this->TbOlheiro->find('first', $options);
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
		$this->TbOlheiro->id = $id;
		if (!$this->TbOlheiro->exists()) {
			throw new NotFoundException(__('Invalid tb olheiro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TbOlheiro->delete()) {
			$this->Session->setFlash(__('The tb olheiro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tb olheiro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TbOlheiro->recursive = 0;
		$this->set('tbOlheiros', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TbOlheiro->exists($id)) {
			throw new NotFoundException(__('Invalid tb olheiro'));
		}
		$options = array('conditions' => array('TbOlheiro.' . $this->TbOlheiro->primaryKey => $id));
		$this->set('tbOlheiro', $this->TbOlheiro->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TbOlheiro->create();
			if ($this->TbOlheiro->save($this->request->data)) {
				$this->Session->setFlash(__('The tb olheiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tb olheiro could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TbOlheiro->exists($id)) {
			throw new NotFoundException(__('Invalid tb olheiro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TbOlheiro->save($this->request->data)) {
				$this->Session->setFlash(__('The tb olheiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tb olheiro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TbOlheiro.' . $this->TbOlheiro->primaryKey => $id));
			$this->request->data = $this->TbOlheiro->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TbOlheiro->id = $id;
		if (!$this->TbOlheiro->exists()) {
			throw new NotFoundException(__('Invalid tb olheiro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TbOlheiro->delete()) {
			$this->Session->setFlash(__('The tb olheiro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tb olheiro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
