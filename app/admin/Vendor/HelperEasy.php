<?php

class HelperEasy {

    public function __construct() {
        
    }

    public function DataMes($date) {
        $meses = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        $div = explode(' ', $date);
        $data = explode('-', $div[0]);

        $dia = $data[2];
        $mes = $meses[(int) ($data[1])];
        $ano = $data[0];

        return $dia . ' de ' . $mes . ' de ' . $ano;
    }
    
    public function DataViews($date, $separador) {
        $data = explode('-', $date);

        $dia = $data[2];
        $mes = $data[1];
        $ano = $data[0];

        return $dia . $separador . $mes . $separador . $ano;
    }

}
