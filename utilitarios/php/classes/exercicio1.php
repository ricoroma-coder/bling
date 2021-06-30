<?php

include_once __DIR__ . "/basica.php";

class Exercicio1 extends Basica 
{
    protected $_array;

    public function __construct($_posicoes)
    {
        for ($_i = 1; $_i <= $_posicoes; $_i++)
        {
            $this->_array[] = $_i;
        }
    }

    public function rotacionarArray($_rotacoes, $_direcao)
    {
        $_tam_array = sizeof($this->_array);
        if ($_direcao == 1)
        {
            for ($_i = 0; $_i < $_tam_array; $_i++)
            {
                $this->_array[$_i-$_rotacoes] = $this->_array[$_i];
            }
        }
        else {
            for ($_i = ($_tam_array - 1); $_i >= 0; $_i--)
            {
                $this->_array[$_i+$_rotacoes] = $this->_array[$_i];
            }
        }

        foreach ($this->_array as $_chave => $_valor)
        {
            $_nova_chave = $_chave;
            if ($_chave < 0)
                $_nova_chave = $_chave + $_tam_array;
            else if ($_chave > ($_tam_array - 1))
                $_nova_chave = $_chave - $_tam_array;

            if ($_chave != $_nova_chave)
            {
                $this->_array[$_nova_chave] = $_valor;
                unset($this->_array[$_chave]);
            }
        }
    }
}