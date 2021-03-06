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
            "max_x" => null,
            "min_x" => null,
            "max_y" => null,
            "min_y" => null
        );
        $this->$_campo = array_merge($this->$_campo, $_aux);
        $_controle = Array();
        foreach ($this->$_campo as $_medidas)
        {
            $_x_y = explode(',', $_medidas);
            if (isset($_x_y[0]) && isset($_x_y[1]))
            {
                $_controle['x'][$_x_y[0]] = $_x_y[0];
                $_controle['y'][$_x_y[1]] = $_x_y[1];
                if ($_x_y[0] > $this->$_campo['max_x'] || is_null($this->$_campo['max_x']))
                    $this->$_campo['max_x'] = $_x_y[0];
                else if ($_x_y[0] < $this->$_campo['min_x'] || is_null($this->$_campo['min_x']))
                    $this->$_campo['min_x'] = $_x_y[0];

                if ($_x_y[1] > $this->$_campo['max_y'] || is_null($this->$_campo['max_y']))
                    $this->$_campo['max_y'] = $_x_y[1];
                else if ($_x_y[1] < $this->$_campo['min_y'] || is_null($this->$_campo['min_y']))
                    $this->$_campo['min_y'] = $_x_y[1];
            }
            
        }

        if ($this->validarRetangulo($_controle) === false)
            $this->_erro[] = "A forma <strong>". substr($_campo, -1) ."</strong> n??o ?? um ret??ngulo";
    }

    public function validarRetangulo($_controle)
    {
        if (sizeof($_controle['x']) > 2 || sizeof($_controle['y']) > 2)
            return false;
        return true;
    }

    public function detectarSobreposicao()
    {
        $this->checarEixo();
        $this->checarEixo('y');

        $_sobreposto = true;
        foreach (['a','b','c','d'] as $_index)
        {
            if (!isset($this->_novo_ret[$_index]) || is_null($this->_novo_ret[$_index]))
                $_sobreposto = false;
        }

        if ($_sobreposto)
            $this->calcularAreaNovoRet();
    }

    public function checarEixo($_eixo = 'x')
    {
        $_lado_1 = 'b';
        $_lado_2 = 'd';
        if ($_eixo == 'y')
        {
            $_lado_1 = 'a';
            $_lado_2 = 'c';
        }
        if ($this->_ret_2["max_{$_eixo}"] <= $this->_ret_1["max_{$_eixo}"] && $this->_ret_2["max_{$_eixo}"] > $this->_ret_1["min_{$_eixo}"])
        {
            if ($this->_ret_2["min_{$_eixo}"] <= $this->_ret_1["min_{$_eixo}"])
            {
                $this->_novo_ret[$_lado_1] = $this->_ret_2["max_{$_eixo}"] - $this->_ret_1["min_{$_eixo}"];
                $this->_novo_ret["max_{$_eixo}"] = $this->_ret_2["max_{$_eixo}"];
                $this->_novo_ret["min_{$_eixo}"] = $this->_ret_1["min_{$_eixo}"];
            }
            else
            {
                $this->_novo_ret[$_lado_1] = $this->_ret_2["max_{$_eixo}"] - $this->_ret_2["max_{$_eixo}"];
                $this->_novo_ret["max_{$_eixo}"] = $this->_ret_2["max_{$_eixo}"];
                $this->_novo_ret["min_{$_eixo}"] = $this->_ret_2["min_{$_eixo}"];
            }
        }
        else if ($this->_ret_2["min_{$_eixo}"] >= $this->_ret_1["min_{$_eixo}"] && $this->_ret_2["min_{$_eixo}"] < $this->_ret_1["max_{$_eixo}"])
        {
            if ($this->_ret_2["max_{$_eixo}"] >= $this->_ret_1["max_{$_eixo}"])
            {
                $this->_novo_ret[$_lado_1] = $this->_ret_1["max_{$_eixo}"] - $this->_ret_2["min_{$_eixo}"];
                $this->_novo_ret["max_{$_eixo}"] = $this->_ret_1["max_{$_eixo}"];
                $this->_novo_ret["min_{$_eixo}"] = $this->_ret_2["min_{$_eixo}"];
            }
            else
            {
                $this->_novo_ret[$_lado_1] = $this->_ret_2["max_{$_eixo}"] - $this->_ret_2["min_{$_eixo}"];
                $this->_novo_ret["max_{$_eixo}"] = $this->_ret_2["max_{$_eixo}"];
                $this->_novo_ret["min_{$_eixo}"] = $this->_ret_2["min_{$_eixo}"];
            }
        }

        if (isset($this->_novo_ret[$_lado_1]))
            $this->_novo_ret[$_lado_2] = $this->_novo_ret[$_lado_1];
    }

    public function calcularAreaNovoRet()
    {
        $this->_novo_ret['area'] = $this->_novo_ret['a'] * $this->_novo_ret['b'];
        if ($this->_novo_ret['a'] == $this->_novo_ret['b'] &&
            $this->_novo_ret['a'] == $this->_novo_ret['c'] &&
            $this->_novo_ret['a'] == $this->_novo_ret['d'])
            $this->_novo_ret['forma'] = 'Quadrado';
        else
            $this->_novo_ret['forma'] = 'Ret??ngulo';
    }

    public function montarHTML($_html = "")
    {
        if (!empty($this->_erro))
        {
            $_html = '<p class="erro">'.implode('<br>', $this->_erro).'</p>';
        }
        else
        {
            $_html = $this->desenharMapa();
        }

        parent::montarHTML($_html);
    }

    public function desenharMapa()
    {
        $_html = '<table class="mapa-tabela">';
        for ($_i = $this->_mapa['max_y']; $_i >= ($this->_mapa['min_y'] - 1); $_i--)
        {
            $_html .= '<tr class="coluna-tabela">';
            for ($_j = ($this->_mapa['min_x'] - 1); $_j <= $this->_mapa['max_x']; $_j++)
            {
                if ($_i == ($this->_mapa['min_y'] - 1))
                {
                    if ($_j != ($this->_mapa['min_x'] - 1))
                        $_html .= '<td class="linha-tabela numero" style="color:white">'.$_j.'</td>';
                    else
                        $_html .= '<td class="linha-tabela numero" style="color:white">*</td>';
                    continue;
                }
                else if ($_j == ($this->_mapa['min_x'] - 1))
                {
                    $_html .= '<td class="linha-tabela numero" style="color:white">'.$_i.'</td>';
                    continue;
                }
                
                $_style = "";
                if ($_i == 0)
                    $_style .= 'border-bottom: 1px solid white;';

                if ($_j == 0)
                    $_style .= 'border-left: 1px solid white;';

                for ($_x = 1; $_x <= 2; $_x++)
                {
                    $_campo = '_ret_'.$_x;
                    if ($_i >= $this->$_campo['min_y'] && $_i < $this->$_campo['max_y'])
                    {
                        if ($_j >= $this->$_campo['min_x'] && $_j < $this->$_campo['max_x'])
                        {
                            $_style_aux = 'background-color:'. ($_x == 1 ? 'blue;' : 'red;');
                            if (isset($this->_novo_ret['min_y']) && isset($this->_novo_ret['max_y']) && isset($this->_novo_ret['min_x']) && isset($this->_novo_ret['max_x']))
                            {
                                if ($_i >= $this->_novo_ret['min_y'] && $_i < $this->_novo_ret['max_y'])
                                {
                                    if ($_j >= $this->_novo_ret['min_x'] && $_j < $this->_novo_ret['max_x'])
                                        $_style_aux = 'background-color:orange;';
                                }
                            }
                            
                            $_style .= $_style_aux;
                        }
                    }
                }

                $_html .= '<td class="linha-tabela" style="'.$_style.'"></td>';
            }
            $_html .= '</tr>';
        }
        $_html .= "</table>";

        // (!isset($_forma['forma']) ? "N??o ?? uma forma sobreposta" : "{$_forma['forma']} - ??rea: {$_forma['area']}m??");
        if (!isset($this->_novo_ret['forma']))
        {
            $_html .= '<p>N??o s??o formas sobrepostas</p>';
        }
        else
        {
            $_html .= "<p>Este ?? um {$this->_novo_ret['forma']} de ??rea igual a {$this->_novo_ret['area']}m??</p>";
            $_html .= "<p class=\"observacao\"><strong>OBS:</strong> A parte correspondente ao {$this->_novo_ret['forma']} s??o os elementos em laranja.</p>";
        }

        return $_html;
    }
}