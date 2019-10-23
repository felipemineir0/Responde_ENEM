<?php

class AreausuarioController extends AppController {

	public $uses = array('Cooperado');

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
				return $this->redirect(array('action' => 'index'));
			}
			else{
				return $this->redirect(array('controller' => 'home', 'action' => 'index'));	
			}
			exit(debug($result));			
		}
	}

	public function sair() {
		$this->log($this->Session->id().':' ."UserLogout called\r\n", LOG_DEBUG);
	   $this->Cookie->delete('Cooperado');
	   $this->redirect($this->Auth->logout());
   }


	public function index() {
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

	public function editar($id = null) {
        if (!$this->Cooperado->exists($id)) {
            $this->Session->setFlash('Registro não pode ser encontrado.', 'default', array('class' => 'alert alert-danger space'));
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Cooperado->save($this->request->data)) {
                $this->Session->setFlash('Registro editado com sucesso!', 'default', array('class' => 'alert alert-success space'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Registro não pode ser editado. Por favor, tente novamente', 'default', array('class' => 'alert alert-danger space'));
            }
        } else {
            $options = array('conditions' => array('Cooperado.' . $this->Cooperado->primaryKey => $id));
            $this->request->data = $this->Cooperado->find('first', $options);
        }
	}

	public function alterar_senha($id = null)
	{
		if (!empty($this->request->data)) {
			$this->Cooperado->recursive = -1;
			$cooperado = $this->Cooperado->find("first", array("conditions" => array("Cooperado.id" => $this->request->data["Cooperado"]["id"])));

			$passwordHasher = new SimplePasswordHasher();
            $senha_anterior = $passwordHasher->hash(
				$this->request->data["Cooperado"]["senha_anterior"]
			);

			if ($senha_anterior == $cooperado["Cooperado"]["senha"]) {
				$cooperado["Cooperado"]["senha"] = $this->request->data["Cooperado"]["nova_senha"];
				if ($this->Cooperado->save($cooperado)) {
					$this->Session->setFlash('Senha alterada com sucesso!', 'default', array('class' => 'alert alert-success space'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Houve um erro no salvamento. Por favor, tente novamente.', 'default', array('class' => 'alert alert-danger space'));
				}
			} else {
				$this->Session->setFlash('Senha atual não corresponde a senha digitada.', 'default', array('class' => 'alert alert-danger space'));
			}
		}
		$options = array('conditions' => array('Cooperado.' . $this->Cooperado->primaryKey => $id));
		$this->request->data = $this->Cooperado->find('first', $options);
	}

	function beforeFilter()
    {
        // tell Auth not to check authentication when doing the 'register' action
        //$this->Auth->allow('registro');
    }

    function registro()
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