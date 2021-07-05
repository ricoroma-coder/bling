<?php

include_once __DIR__ . "/../classes/exercicio2.php";

class ControladorExercicio2
{
    public function processar($_data)
    {
        $_obj = new Exercicio2($_data['vetor']);
        $_obj->reordenarArray();
        $_obj->montarHTML();
    }
}