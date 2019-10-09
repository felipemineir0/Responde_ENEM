<?php

/* /app/View/Helper/LinkHelper.php (using other helpers) */
App::uses('AppHelper', 'View/Helper');

class DataHelper extends AppHelper {

    public $helpers = array('Html');

    public function dataExtenso($data) {
        debug($data);
        exit();
        //$data = date($data);
        $dia = $data('d');
        $mes = $data('m');
        $ano = $data('Y');
        //$semana = $data('w');

        switch ($mes) {

            case 1: $mes = "Janeiro";
                break;
            case 2: $mes = "Fevereiro";
                break;
            case 3: $mes = "Março";
                break;
            case 4: $mes = "Abril";
                break;
            case 5: $mes = "Maio";
                break;
            case 6: $mes = "Junho";
                break;
            case 7: $mes = "Julho";
                break;
            case 8: $mes = "Agosto";
                break;
            case 9: $mes = "Setembro";
                break;
            case 10: $mes = "Outubro";
                break;
            case 11: $mes = "Novembro";
                break;
            case 12: $mes = "Dezembro";
                break;
        }

        return '<div class="editOuter">' . $dia . " de " . $mes . " de " . $ano . '</div>';
    }

}
