<?php

include_once __DIR__ . "/../classes/exercicio3.php";

class ControladorExercicio3
{
    public function processar($_data)
    {
        $_obj = new Exercicio3();
        $_html = $_obj->receberDatas($_data['data_ini'], $_data['data_fim']);
        $_obj->montarHTML($_html);
    }
}