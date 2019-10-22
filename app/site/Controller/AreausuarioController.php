<?php

class AreausuarioController extends AppController {

	public $uses = array('Cooperado');

	public function index() { }

	public function login() {
		if ($this->request->is('post')) {
			//exit(debug($this->request["data"]["CooperadoLogin"]["senha"]));

			$senha = sha1($this->request["data"]["CooperadoLogin"]["senha"]);
			$matricula = $this->request["data"]["CooperadoLogin"]["matricula"];
			$result = $this->Cooperado->find("first",array('conditions'=> array('Cooperado.senha' => $senha, 'Cooperado.matricula'=>$matricula, 'Cooperado.ativo' => 1 )));
			if (!empty($result)) {

				$this->Session->write('cooperadoLogado', 'true');
				//CakeSession::read('Config.language');
				//exit(debug($this->request["data"]));
				$this->Auth->login($result);		
				return $this->redirect(array('action' => 'arquivos'));
			}
			else{
				return $this->redirect(array('controller' => 'home', 'action' => 'index'));	
			}
			exit(debug($result));			
		}
	}

	public function sair() {
		$this->Session->write('cooperadoLogado', '');
		return $this->redirect(array('controller' => 'home', 'action' => 'index'));
	}

	public function arquivos() {
		$logado = $this->Session->read('cooperadoLogado');
		$usuario = $this->Auth->user();
		//exit(debug($usuario));
		//debug($_SESSION);
		if (!empty($logado) && $logado == "true") {
			$cooperado = $this->Cooperado->find("first",array('conditions'=> array('Cooperado.id' => $usuario['Cooperado']['id'])));
			$this->set("cooperado",$cooperado);
		}
		else{
			return $this->redirect(array('controller' => 'home', 'action' => 'index'));	
		}
	}

	function beforeFilter()
    {
        // tell Auth not to check authentication when doing the 'register' action
        $this->Auth->allow('registro');
    }

    function register()
    {
        if (!empty($this->data)) {
            if ($this->data['Cooperado']['senha'] == $this->Auth->password($this->data['Cooperado']['senha_confirma'])) {
                $this->Registro->create();
                if ($this->Registro->save($this->data)) {
                    $this->Auth->login($this->data);
                    $this->redirect(array('controller' => 'home', 'action' => 'index'));
                }
            }
        }
    }
}