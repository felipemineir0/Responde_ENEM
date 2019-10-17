<?php

class EmailTemplateContatoComponent extends Component {

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
            $strHtml = $this->SubstituiValores($strHtml, "EMAIL", $obj["Contato"]["email"]);
            $strHtml = $this->SubstituiValores($strHtml, "TELEFONE", $obj["Contato"]["telefone"]);
            $strHtml = $this->SubstituiValores($strHtml, "CIDADE", $obj["Contato"]["cidade"]);
            $strHtml = $this->SubstituiValores($strHtml, "ESTADO", $obj["Contato"]["estado"]);
            $strHtml = $this->SubstituiValores($strHtml, "MENSAGEM", $obj["Contato"]["mensagem"]);


            $nome = "Contato - Responde ENEM";

            $Email = new CakeEmail('smtp');
            $Email->to('contato@.com.br');
            $Email->replyTo($obj["Contato"]["email"]);
            $Email->subject($nome);
            $Email->send($strHtml);
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