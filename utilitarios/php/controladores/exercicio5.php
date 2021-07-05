<?php

include_once __DIR__ . "/../classes/exercicio5.php";

class ControladorExercicio5
{
    public function processar($_data)
    {
        $_obj = new Exercicio5($_data['frase'], $_data['subtexto']);
        $_obj->encontrarOcorrencia();
        // echo var_export($_obj->buscar('_ocorrencias'), true);
        $_obj->montarHTML();
    }
}