<?php

class AreausuarioController extends AppController {

	public $uses = array('Cooperado');

	public function index() {

	}

	public function login() {
		

		if ($this->request->is('post')) {
			//exit(debug($this->request["data"]["CooperadoLogin"]["password"]));

			$senha = sha1($this->request["data"]["CooperadoLogin"]["password"]);
			$matricula = $this->request["data"]["CooperadoLogin"]["matricula"];
			$result = $this->Cooperado->find("first",array('conditions'=> array('Cooperado.password' => $senha, 'Cooperado.matricula'=>$matricula, 'Cooperado.ativo' => 1 )));
			if (!empty($result)) {

				$this->Session->write('cooperadoLogado', 'true');
				//CakeSession::read('Config.language');
				

				return $this->redirect(array('action' => 'arquivos'));
			}
			else{
				return $this->redirect(array('action' => 'index'));	
			}
			exit(debug($result));			
		}

	}


	public function sair() {
		$this->Session->write('cooperadoLogado', '');
		return $this->redirect(array('action' => 'index'));	
		//exit(debug($logado));

	}

	public function arquivos() {

		$logado = $this->Session->read('cooperadoLogado');
		//debug($_SESSION);
		if (!empty($logado) && $logado == "true") {
			$cooperados = $this->Cooperado->find("all");
			$this->set("cooperados",$cooperados);
		}
		else{
			return $this->redirect(array('action' => 'index'));	
		}
		
	}
}