<?php

include_once __DIR__ . "/basica.php";

class Exercicio6 extends Basica 
{
    protected $_mapa;
    protected $_ret_1;
    protected $_ret_2;
    protected $_novo_ret;

    public function __construct()
    {
        $this->_mapa = Array(
            "max_x" => 1,
            "min_x" => -1,
            "max_y" => 1,
            "min_y" => -1
        );

        $this->_novo_ret = Array();
    }

    public function montarMapa()
    {
        $_array = Array(1 => $this->_ret_1, 2 => $this->_ret_2);
        foreach ($_array as $_chave => $_retangulo)
        {
            foreach ($_retangulo as $_medidas)
            {
                $_x_y = explode(',', $_medidas);
                if (($_x_y[0] + 1) > $this->_mapa['max_x'])
                    $this->_mapa['max_x'] = $_x_y[0] + 1;
                else if (($_x_y[0] - 1) < $this->_mapa['min_x'])
                    $this->_mapa['min_x'] = $_x_y[0] - 1;

                if (($_x_y[1] + 1) > $this->_mapa['max_y'])
                    $this->_mapa['max_y'] = $_x_y[1] + 1;
                else if (($_x_y[1] - 1) < $this->_mapa['min_y'])
                    $this->_mapa['min_y'] = $_x_y[1] - 1;
            }

            $this->ajustarRetangulo($_chave);
        }
    }

    public function ajustarRetangulo($_chave)
    {
        $_campo = "_ret_{$_chave}";
        $_aux = Array(
            "max_x" => 0,
            "min_x" => 0,
            "max_y" => 0,
            "min_y" => 0
        );
        $this->$_campo = array_merge($this->$_campo, $_aux);
        foreach ($this->$_campo as $_medidas)
        {
            $_x_y = explode(',', $_medidas);
            if (isset($_x_y[0]) && isset($_x_y[1]))
            {
                if ($_x_y[0] > $this->$_campo['max_x'])
                    $this->$_campo['max_x'] = $_x_y[0];
                else if ($_x_y[0] < $this->$_campo['min_x'])
                    $this->$_campo['min_x'] = $_x_y[0];

                if ($_x_y[1] > $this->$_campo['max_y'])
                    $this->$_campo['max_y'] = $_x_y[1];
                else if ($_x_y[1] < $this->$_campo['min_y'])
                    $this->$_campo['min_y'] = $_x_y[1];
            }
            
        }
    }

    public function detectarSobreposicao()
    {
        $this->checarEixoX();
        $this->checarEixoY();

        $_sobreposto = true;
        foreach (['a','b','c','d'] as $_index)
        {
            if (!isset($this->_novo_ret[$_index]) || is_null($this->_novo_ret[$_index]))
                $_sobreposto = false;
        }

        if ($_sobreposto)
            $this->calcularAreaNovoRet();
    }

    public function checarEixoX()
    {
        if ($this->_ret_2['max_x'] <= $this->_ret_1['max_x'] && $this->_ret_2['max_x'] > $this->_ret_1['min_x'])
        {
            if ($this->_ret_2['min_x'] <= $this->_ret_1['min_x'])
            {
                $this->_novo_ret['b'] = $this->_ret_2['max_x'] - $this->_ret_1['min_x'];
                $this->_novo_ret['max_x'] = $this->_ret_2['max_x'];
                $this->_novo_ret['min_x'] = $this->_ret_1['min_x'];
            }
            else
            {
                $this->_novo_ret['b'] = $this->_ret_2['max_x'] - $this->_ret_2['min_x'];
                $this->_novo_ret['max_x'] = $this->_ret_2['max_x'];
                $this->_novo_ret['min_x'] = $this->_ret_2['min_x'];
            }
        }
        else if ($this->_ret_2['min_x'] >= $this->_ret_1['min_x'] && $this->_ret_2['min_x'] < $this->_ret_1['max_x'])
        {
            if ($this->_ret_2['max_x'] >= $this->_ret_1['max_x'])
            {
                $this->_novo_ret['b'] = $this->_ret_1['max_x'] - $this->_ret_2['min_x'];
                $this->_novo_ret['max_x'] = $this->_ret_1['max_x'];
                $this->_novo_ret['min_x'] = $this->_ret_2['min_x'];
            }
            else
            {
                $this->_novo_ret['b'] = $this->_ret_2['max_x'] - $this->_ret_2['min_x'];
                $this->_novo_ret['max_x'] = $this->_ret_2['max_x'];
                $this->_novo_ret['min_x'] = $this->_ret_2['min_x'];
            }
        }

        if (isset($this->_novo_ret['b']))
            $this->_novo_ret['d'] = $this->_novo_ret['b'];
    }

    public function checarEixoY()
    {
        if ($this->_ret_2['max_y'] <= $this->_ret_1['max_y'] && $this->_ret_2['max_y'] > $this->_ret_1['min_y'])
        {
            if ($this->_ret_2['min_y'] <= $this->_ret_1['min_y'])
            {
                $this->_novo_ret['a'] = $this->_ret_2['max_y'] - $this->_ret_1['min_y'];
                $this->_novo_ret['max_y'] = $this->_ret_2['max_y'];
                $this->_novo_ret['min_y'] = $this->_ret_1['min_y'];
            }
            else
            {
                $this->_novo_ret['a'] = $this->_ret_2['max_y'] - $this->_ret_2['min_y'];
                $this->_novo_ret['max_y'] = $this->_ret_2['max_y'];
                $this->_novo_ret['min_y'] = $this->_ret_2['min_y'];
            }
        }
        else if ($this->_ret_2['min_y'] >= $this->_ret_1['min_y'] && $this->_ret_2['min_y'] < $this->_ret_1['max_y'])
        {
            if ($this->_ret_2['max_y'] >= $this->_ret_1['max_y'])
            {
                $this->_novo_ret['a'] = $this->_ret_1['max_y'] - $this->_ret_2['min_y'];
                $this->_novo_ret['max_y'] = $this->_ret_1['max_y'];
                $this->_novo_ret['min_y'] = $this->_ret_2['min_y'];
            }
            else
            {
                $this->_novo_ret['a'] = $this->_ret_2['max_y'] - $this->_ret_2['min_y'];
                $this->_novo_ret['max_y'] = $this->_ret_2['max_y'];
                $this->_novo_ret['min_y'] = $this->_ret_2['min_y'];
            }
        }

        if (isset($this->_novo_ret['a']))
            $this->_novo_ret['c'] = $this->_novo_ret['a'];
    }

    public function calcularAreaNovoRet()
    {
        $this->_novo_ret['area'] = $this->_novo_ret['a'] * $this->_novo_ret['b'];
        if ($this->_novo_ret['a'] == $this->_novo_ret['b'] &&
            $this->_novo_ret['a'] == $this->_novo_ret['c'] &&
            $this->_novo_ret['a'] == $this->_novo_ret['d'])
            $this->_novo_ret['forma'] = 'Quadrado';
        else
            $this->_novo_ret['forma'] = 'Retângulo';
    }
}