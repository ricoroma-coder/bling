<?php

include_once __DIR__ . "/../classes/exercicio1.php";

class ControladorExercicio1
{
    public function processar($_data)
    {
        $_obj = new Exercicio1($_data['posicoes']);
        $_obj->rotacionarArray($_data['rotacoes'], $_data['direcao']);
        $_obj->montarHTML();
    }
}