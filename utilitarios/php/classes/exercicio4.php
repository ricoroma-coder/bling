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

    public function montarHTML($_html = "")
    {
        $_html = '<p>';
        foreach ($this->_combinacoes as $_chave => $_valores)
        {
            $_html .= 'Combinações elemento \'';
            $_html .= is_numeric($this->_medidas[$_chave]) ? '<span class="numero">' : '<span>';
            $_html .= $this->_medidas[$_chave] . '</span>\':<br>';
            foreach ($_valores as $_combinacoes)
            {
                $_html .= '&nbsp;&nbsp;[';
                for ($_i = 0; $_i < 3; $_i++)
                {
                    $_html .= is_numeric($_combinacoes[$_i]) ? '<span class="numero">' : '<span>';
                    $_html .= $_combinacoes[$_i] . '</span>';
                    if ($_i != 2)
                        $_html .= '<span class="virgula">,</span>';
                }
                $_html .= ']<span class="virgula">,</span><br>';
            }
        }
        $_html .= '</p>';
        parent::montarHTML($_html);
    }
}