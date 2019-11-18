<?php
error_reporting(0);
ini_set("display_errors", 1);

class UploadComponent extends Component {

    protected $_controller = null;
    public $components = array('Image');

    public function startup(Controller $controller) {
        $this->_controller = $controller;
    }

    public function __construct($collection = null, $settings = array()) {
        //parent::__construct($collection, $settings);
    }

    public function delete($dir = 'upload', $arquivo = "", $admin = false, $tamanhos = null) {
        if (!empty($arquivo)) {

            if (!$admin) {
                $dir = dirname(WWW_ROOT) . DS . "site" . DS . $dir;
            } else {
                $dir = dirname(WWW_ROOT) . DS . "admin" . DS . $dir;
            }

            if (file_exists($dir . $arquivo)) {
                // exit(debug($dir . $arquivo));

                $this->testaDeleta($dir . $arquivo);
                $this->testaDeleta($dir . "l_" . $arquivo);
                $this->testaDeleta($dir . "m_" . $arquivo);
                $this->testaDeleta($dir . "s_" . $arquivo);

                if ($tamanhos != null) {
                    foreach ($tamanhos as $key => $value) {
                        $this->testaDeleta($dir . $key . "x" . $value . '-' . $arquivo);
                    }
                }
            }
        }
        return;
    }

    public function testaDeleta($arquivo) {
        if (file_exists($arquivo)) {
            unlink($arquivo);
        }
        return;
    }


    public function upload($imagem = array(), $dir = 'upload', $admin = false, $tamanhos = null, $limpar_pasta = false) {


        //$dir = basename(dirname(WWW_ROOT)) . DS . "site" . DS . $dir;
        if (!$admin) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS . $dir;
        } else
        $dir = dirname(WWW_ROOT) . DS . "admin" . DS . $dir;


        //LIMPA PASTA
        if ($limpar_pasta) {
            $this->limpaPasta($dir);
        }

        if (strpos($imagem["type"], 'image') === false) {
            return "";
        }


        if (($imagem['error'] != 0) and ( $imagem['size'] == 0)) {
            throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro ' . $imagem['error'] . ' e tamanho ' . $imagem['size']);
        }

        $this->checa_dir($dir);

        $imagem = $this->checa_nome($imagem, $dir);

        $this->move_arquivos($imagem, $dir);
//exit(debug($imagem));


        App::import('Vendor', 'PhpThumbFactory', array('file' => 'phpThumb/ThumbLib.inc.php'));
        $image_name = $dir . $imagem['name'];

        if ($tamanhos != null) {

            foreach ($tamanhos as $key => $value) {
                $thumb = PhpThumbFactory::create($image_name);
                $thumb->adaptiveResize($key, $value)->save($dir . $key.'x'.$value. '-' . $imagem['name']);
                unset($thumb);
            }
        }

        $thumb = PhpThumbFactory::create($image_name);
        $thumb->resize(990, 460)->save($dir . 'l_' . $imagem['name']);
        unset($thumb);

        $thumb = PhpThumbFactory::create($image_name);
        $thumb->resize(314, 134)->save($dir . 'm_' . $imagem['name']);
        unset($thumb);

        $thumb = PhpThumbFactory::create($image_name);
        $thumb->adaptiveResize(78, 58)->save($dir . 's_' . $imagem['name']);
        unset($thumb);

        return $imagem['name'];

    }

    public function uploadArquivo($arquivo = array(), $dir = 'upload', $admin = false, $limpar_pasta = false) {
        //$dir = basename(dirname(WWW_ROOT)) . DS . "site" . DS . $dir;
        //exit(debug($arquivo));
        if (!$admin) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS . $dir;
        } else
        $dir = dirname(WWW_ROOT) . DS . "admin" . DS . $dir;
        //exit(debug($arquivo));
        if (($arquivo['error'] != 0) and ( $arquivo['size'] == 0)) {
            throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro ' . $arquivo['error'] . ' e tamanho ' . $arquivo['size']);
        }


         //LIMPA PASTA
        if ($limpar_pasta) {
            $scanned_directory = array_diff(scandir($dir), array('..', '.'));
            if (count($scanned_directory)) {
                foreach ($scanned_directory as $value) {
                    $this->testaDeleta($dir . DS . $value);
                }
            }
        }
         //LIMPA PASTA


        $this->checa_dir($dir);

        $arquivo = $this->checa_nome($arquivo, $dir);
        //exit(debug($arquivo));
        $this->move_arquivos($arquivo, $dir);

        return $arquivo['name'];
    }



    public function limpaPasta($dir)
    {
        $array_dir = scandir($dir);
        //exit(debug($array_dir));
        if ($array_dir !== false && !empty($array_dir)) {
            $scanned_directory = array_diff(array_dir, array('..', '.'));
            if (count($scanned_directory)) 
            {
                foreach ($scanned_directory as $value) 
                {
                    $this->testaDeleta($dir . DS . $value);
                }
            }
            return true;
        }        
    }


    public function crop($image_name, $top_x, $top_y, $bottom_x, $bottom_y, $width, $height, $dir = 'upload', $admin = false) {
        if (!$admin) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS . "upload" . DS . $dir . DS;
        } else
        $dir = dirname(WWW_ROOT) . DS . "admin" . DS . "upload" . DS . $dir . DS;

        $name = $image_name;

        $image_name = $dir . "l_" . $image_name;
        //debug($image_name);

        App::import('Component', 'Image');
        $MyImageCom = new ImageComponent();

        $MyImageCom->prepare($image_name);

        $MyImageCom->crop($top_x, $top_y, $bottom_x, $bottom_y); //width,height,Red,Green,Blue
        $MyImageCom->save($dir . 'c_' . $name);

        $MyImageCom->prepare($dir . 'c_' . $name);
        $MyImageCom->resize($width, $height); //width,height,Red,Green,Blue
        $MyImageCom->save($dir . 'c_' . $name);

        return true;
    }

    /**
     * Verifica se o diretório existe, se não ele cria.
     * @access public
     * @param Array $imagem
     * @param String $data
     */
    public function checa_dir($dir) {
        App::uses('Folder', 'Utility');
        $folder = new Folder();
        if (!is_dir($dir)) {
            $folder->create($dir);
        }
    }

    function criaPasta($pasta) {
        if (!is_dir($pasta)):
            $folder = new Folder();
        $pasta = $pasta . DS;
        if ($folder->create($pasta)):
            $folder->create($pasta);
        $folder->chmod($pasta, 0755, true);
        else:
            throw new NotFoundException(
                __('Não foi possível criar a pasta de upload (Padrão em APP/webroot/myImg) verifique se o caminho está correto e as permissões!')
                );
        endif;
        endif;
    }

    /**
     * Verifica se o nome do arquivo já existe, se existir adiciona um numero ao nome e verifica novamente
     * @access public
     * @param Array $imagem
     * @param String $data
     * @return nome da imagem
     */
    public function checa_nome($imagem, $dir) {
        $imagem_info = pathinfo($dir . $imagem['name']);
        //$dir = new Folder($myFolder);

        $imagem_nome = $this->trata_nome($imagem_info['filename']) . '.' . $imagem_info['extension'];
        //debug($imagem_nome);
        $conta = 2;
        while (file_exists($dir . $imagem_nome)) {
            $imagem_nome = $this->trata_nome($imagem_info['filename']) . '-' . $conta;
            $imagem_nome .= '.' . $imagem_info['extension'];
            $conta++;
            // debug($imagem_nome);
        }
        $imagem['name'] = $imagem_nome;
        return $imagem;
    }

    /**
     * Trata o nome removendo espaços, acentos e caracteres em maiúsculo.
     * @access public
     * @param Array $imagem
     * @param String $data
     */
    public function trata_nome($imagem_nome) {
        $imagem_nome = strtolower(Inflector::slug($imagem_nome, '-'));
        return $imagem_nome;
    }

    /**
     * Move o arquivo para a pasta de destino.
     * @access public
     * @param Array $imagem
     * @param String $data
     */
    public function move_arquivos($imagem, $dir) {
        App::uses('File', 'Utility');
        $arquivo = new File($imagem['tmp_name']);
        $arquivo->copy($dir . $imagem['name']);
        $arquivo->close();
    }

}

?>