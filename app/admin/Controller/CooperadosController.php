<?php
App::uses('AppController', 'Controller');

/**
 * Cooperados Controller
 *
 * @property Cooperado $Cooperado
 * @property PaginatorComponent $Paginator
 */
class CooperadosController extends AppController {

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
	$this->Cooperado->recursive = 0;
	$this->set('cooperados', $this->Paginator->paginate());
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function view($id = null) {
	if (!$this->Cooperado->exists($id)) {
		throw new NotFoundException(__('Invalid cooperado'));
	}
	$options = array('conditions' => array('Cooperado.' . $this->Cooperado->primaryKey => $id));
	$this->set('cooperado', $this->Cooperado->find('first', $options));
}

/**
 * add method
 *
 * @return void
 */
public function add() {
	if ($this->request->is('post')) {
		$this->Cooperado->create();
		if ($this->Cooperado->save($this->request->data)) {
			$this->Session->setFlash(__('The cooperado has been saved.'));
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The cooperado could not be saved. Please, try again.'));
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
	if (!$this->Cooperado->exists($id)) {
		throw new NotFoundException(__('Invalid cooperado'));
	}
	if ($this->request->is(array('post', 'put'))) {
		if ($this->Cooperado->save($this->request->data)) {
			$this->Session->setFlash(__('The cooperado has been saved.'));
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The cooperado could not be saved. Please, try again.'));
		}
	} else {
		$options = array('conditions' => array('Cooperado.' . $this->Cooperado->primaryKey => $id));
		$this->request->data = $this->Cooperado->find('first', $options);
	}
}

public function alterar_senha($id = null) {


	if (!empty($this->request->data)) {
            //echo($this->request->is('post'));
            //exit(debug($this->request));

		$this->Cooperado->recursive = -1;
		$user = $this->Cooperado->find("first", array("conditions" => array("Cooperado.id" => $this->request->data["Cooperado"]["id"])));

		//$passwordHasher = new SimplePasswordHasher();
		//$this->data[$this->alias]['password'] = sha1($this->data[$this->alias]['password']);
		$senha_anterior = sha1($this->request->data["Cooperado"]["senha_anterior"]);
            //exit(debug($user));
            //exit(debug($this->request->data["Cooperado"]["nova_senha"]));
		if ($senha_anterior == $user["Cooperado"]["password"]) {
                //exit(debug($this->request->data["Cooperado"]["nova_senha"]));
			$user["Cooperado"]["password"] = $this->request->data["Cooperado"]["nova_senha"];
                //exit(debug($user));
			if ($this->Cooperado->save($user)) {
                    //exit(debug($alumni));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Houve um erro no salvamento, favor tentar novamente'));
			}
		}
	}
	$options = array('conditions' => array('Cooperado.' . $this->Cooperado->primaryKey => $id));
	$this->request->data = $this->Cooperado->find('first', $options);
}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function delete($id = null) {
	$this->Cooperado->id = $id;
	if (!$this->Cooperado->exists()) {
		throw new NotFoundException(__('Invalid cooperado'));
	}
	$this->request->allowMethod('post', 'delete');
	if ($this->Cooperado->delete()) {
		$this->Session->setFlash(__('The cooperado has been deleted.'));
	} else {
		$this->Session->setFlash(__('The cooperado could not be deleted. Please, try again.'));
	}
	return $this->redirect(array('action' => 'index'));
}
}
