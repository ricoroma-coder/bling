<?php

include_once __DIR__ . "/basica.php";

class Exercicio2 extends Basica 
{
    protected $_array;

    public function __construct($_vetor)
    {
        $this->_array = explode(',', $_vetor);
        sort($this->_array);
    }

    public function reordenarArray()
    {
        $_tam_array = sizeof($this->_array);
        $_resumo = $this->separarParesImpares($_tam_array);
        if ($_resumo !== false)
            $this->organizarArray($_resumo);
    }

    public function separarParesImpares($_tam_array)
    {
        if ($this->validarValores() === false)
            return false;

        $_impares = 0;
        $_pares = 0;
        for ($_i = 0; $_i < $_tam_array; $_i++)
        {
            if ($this->_array[$_i] % 2 == 0)
            {
                $_pares++;
                $_nova_chave = $_pares + ($_tam_array - 1);
            }
            else 
            {
                $_impares++;
                $_nova_chave = 0 - $_impares;
            }
                
            $this->_array[$_nova_chave] = $this->_array[$_i];
            unset($this->_array[$_i]);
        }

        return Array("pares" => $_pares, "impares" => $_impares);
    }

    public function organizarArray($_resumo)
    {
        $_impares = $_resumo['impares'];
        for ($_i = ($_impares - ($_impares * 2)); $_i < 0; $_i++)
        {
            $this->_array[] = $this->_array[$_i];
            unset($this->_array[$_i]);
        }
    }

    public function validarValores()
    {
        foreach ($this->_array as $_valor)
        {
            if (!is_numeric($_valor))
                $this->_erro[] = "'{$_valor}' não é um número.";
        }

        if (!empty($this->_erro))
            return false;
        return true;
    }

    public function montarHTML($_html = "")
    {
        if (!empty($this->_erro))
        {
            $_html = '<p class="erro">'.implode('<br>', $this->_erro).'</p>';
        }
        else
        {
            $_html = '<p><span class="tipagem">Array</span>[<span class="numero">'.sizeof($this->_array).'</span>]<br>[';
            $_i = 0;
            foreach ($this->_array as $_valor)
            {
                if ($_i == 0)
                    $_html .= '<br>';
                $_html .= "&nbsp;&nbsp;[<span class=\"numero\">{$_i}</span>] => <span class=\"numero\">{$_valor}</span><span class=\"virgula\">,</span><br>";
                $_i++;
            }
            $_html .= ']</p>';
        }
        
        parent::montarHTML($_html);
    }
}