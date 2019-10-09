<?php

class EmailTemplateComponent extends Component {

    protected $_controller = null;

    public function startup(Controller $controller) {
        $this->_controller = $controller;
    }

    public function __construct($collection = null, $settings = array()) {
        //parent::__construct($collection, $settings);
    }

    public function checa_dir($dir) {
        App::uses('CakeEmail', 'Network/Email');

        App::uses('Folder', 'Utility');
        $folder = new Folder();
        if (!is_dir($dir)) {
            $folder->create($dir);
        }
    }

    public function EmailContato($obj) {
        App::uses('CakeEmail', 'Network/Email');

        //exit(debug($dir));
        if ($obj != null) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS;
            $strHtml = $this->RetornaStrArquivo($dir . "templates/email_contato.html");
            //exit(debug($strHtml));
            $strHtml = $this->SubstituiValores($strHtml, "NOME", $obj["Contato"]["nome"]);
            $strHtml = $this->SubstituiValores($strHtml, "SOBRENOME", $obj["Contato"]["sobrenome"]);
            $strHtml = $this->SubstituiValores($strHtml, "EMAIL", $obj["Contato"]["email"]);
            $strHtml = $this->SubstituiValores($strHtml, "TELEFONE", $obj["Contato"]["telefone"]);
            $strHtml = $this->SubstituiValores($strHtml, "CIDADE", $obj["Contato"]["cidade"]);
            $strHtml = $this->SubstituiValores($strHtml, "ASSUNTO", $obj["Contato"]["assunto"]);
            $strHtml = $this->SubstituiValores($strHtml, "MENSAGEM", $obj["Contato"]["mensagem"]);


            $assunto = "Contato - Han Brazil";

            $Email = new CakeEmail('smtp');
            $Email->to('info@hanbrazil.org'); //contato
            //$Email->emailFormat('html');
            $Email->subject($assunto);
            $Email->send($strHtml);
            //exit(debug($strHtml));
        }
    }

    public function FormataNews($id) {

        if ($id != null) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS;

            $strHtml = $this->RetornaStrArquivo($dir . "templates" . DS . "email_contato.html");

            $NewsHtml = $this->RetornaStrArquivo($dir . "upload" . DS . "newsletter" . DS . $id . ".html");
            
            $strHtml = $this->SubstituiValores($strHtml, "CONTEUDO", $NewsHtml);
            
            return $strHtml;
        }
    }

    public function EmailCadastro($obj) {
        App::uses('CakeEmail', 'Network/Email');

        //exit(debug($dir));
        if ($obj != null) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS;

            $strHtml = $this->RetornaStrArquivo($dir . "templates/email_cadastro.html");
            //$strHtml = $this->SubstituiValores($strHtml, "NOME", strtoupper($obj->nome));
            //$strHtml = $this->SubstituiValores($strHtml, "EMAIL", $obj->email);

            $assunto = "Cadastro - Han Brazil";

            $Email = new CakeEmail('smtp');
            $Email->to($obj["Alumni"]["email"]); //contato
            //$Email->cc('diorgenescicero@gmail.com'); //contato
            //$Email->emailFormat('html');
            $Email->subject($assunto);
            $Email->send($strHtml);
        }
    }

    public function EmailRecuperarSenha($obj) {
        App::uses('CakeEmail', 'Network/Email');
        if ($obj != null) {

            $dir = dirname(WWW_ROOT) . DS . "site" . DS;

            $strHtml = $this->RetornaStrArquivo($dir . "templates/email_recuperar_senha.html");
            $strHtml = $this->SubstituiValores($strHtml, "NOVASENHA", $obj["Alumni"]["senha"]);
            $strHtml = $this->SubstituiValores($strHtml, "EMAIL", $obj["Alumni"]["email"]);
            $strHtml = $this->SubstituiValores($strHtml, "NOME", strtoupper($obj["Alumni"]["nome"]));

            $assunto = "Recuperar Senha - Han Brazil";

            $Email = new CakeEmail('smtp');
            $Email->to($obj["Alumni"]["email"]); //contato

            //$Email->cc('diorgenescicero@gmail.com'); //contato
            //$Email->emailFormat('html');
            $Email->subject($assunto);
            $Email->send($strHtml);

            return;
        }
    }

    public function SubstituiValores($strEntrada, $chave, $valor) {
        return str_replace("%%" . $chave . "%%", $valor, $strEntrada);
    }

    public function RetornaStrArquivo($caminho) {
        $data = file_get_contents($caminho); //read the file
        $convert = explode("\n", $data); //create array separate by new line

        $strHtml = "";

        for ($i = 0; $i < count($convert); $i++) {
            $strHtml .= $convert[$i]; //write value by index
        }
        return $strHtml;
    }

    public function TrataCaracteresEmail($str) {

        //metodo de disparo Email 
        return $str;
    }

}

?>