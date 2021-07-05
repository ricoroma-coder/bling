<?php

include_once __DIR__ . "/../classes/exercicio6.php";

class ControladorExercicio6
{
    public function processar($_data)
    {
        $_auxiliar = Array();
        $_obj = new Exercicio6();
        for ($_i = 1; $_i <= 2; $_i++)
        {
            for ($_j = 0; $_j < 4; $_j++)
            {
                $_auxiliar[$_i][$_j] = $_data["ret_{$_i}_med_{$_j}"];
            }
            $_obj->atribuir("_ret_{$_i}", $_auxiliar[$_i]);
        }
        $_obj->montarMapa();

        if (empty($_obj->buscar('_erro')))
            $_obj->detectarSobreposicao();
        
        $_obj->montarHTML();
        // $_forma = $_obj->buscar('_novo_ret');
        // echo (!isset($_forma['forma']) ? "Não é uma forma sobreposta" : "{$_forma['forma']} - Área: {$_forma['area']}m²");
    }
}