<?php

include_once __DIR__ . "/../classes/exercicio4.php";

class ControladorExercicio4
{
    public function processar($_data)
    {
        $_array = Array();
        for ($_i = 1; $_i <= 6; $_i++)
        {
            $_array[$_i] = $_data["medida_{$_i}"];
        }
        $_obj = new Exercicio4($_array);
        $_obj->combinar();
        $_obj->montarHTML();
    }
}