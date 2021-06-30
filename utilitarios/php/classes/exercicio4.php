<?php

include_once __DIR__ . "/basica.php";

class Exercicio4 extends Basica 
{
    protected $_medidas;
    protected $_combinacoes;

    public function __construct($_medidas)
    {
        $this->_medidas = $_medidas;
        $this->_combinacoes = Array();
    }

    public function combinar($_chave_1 = 0, $_chave_2 = 0)
    {
        for ($_i = 1; $_i <= 6; $_i++)
        {
            if ($_chave_1 == 0)
            {
                if (!isset($this->_combinacoes[$_i]))
                    $this->combinar($_i);
            }
            else if ($_chave_2 == 0)
            {
                if ($_chave_1 != $_i)
                    $this->combinar($_chave_1, $_i);
            }
            else
            {
                if (!in_array($_i, [$_chave_1, $_chave_2]))
                {
                    $this->_combinacoes[$_chave_1][] = [
                        $this->_medidas[$_chave_1],
                        $this->_medidas[$_chave_2],
                        $this->_medidas[$_i],
                    ];
                }
                    
            } 
        }
    }
}