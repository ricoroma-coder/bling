<?php

include_once __DIR__ . "/basica.php";

class Exercicio7 extends Basica 
{
    protected $_mapa;
    protected $_caminhos;

    public function __construct($_dados)
    {
        $this->_mapa['a']['a,b'] = 7;
        $this->_mapa['a']['a,d'] = 5;
        
        $this->_mapa['b']['b,a'] = 7;
        $this->_mapa['b']['b,d'] = 9;
        $this->_mapa['b']['b,c'] = 8;
        $this->_mapa['b']['b,e'] = 7;

        $this->_mapa['c']['c,b'] = 8;
        $this->_mapa['c']['c,e'] = 5;

        $this->_mapa['d']['d,a'] = 5;
        $this->_mapa['d']['d,b'] = 9;
        $this->_mapa['d']['d,e'] = 15;
        $this->_mapa['d']['d,f'] = 6;

        $this->_mapa['e']['e,b'] = 7;
        $this->_mapa['e']['e,c'] = 5;
        $this->_mapa['e']['e,d'] = 15;
        $this->_mapa['e']['e,f'] = 8;
        $this->_mapa['e']['e,g'] = 9;

        $this->_mapa['f']['f,d'] = 6;
        $this->_mapa['f']['f,e'] = 8;
        $this->_mapa['f']['f,g'] = 11;

        $this->_mapa['g']['g,e'] = 9;
        $this->_mapa['g']['g,f'] = 11;
    }

    public function buscarCaminhos()
    {
        $this->caminhar();
        $this->calcularDistancia();
    }

    public function caminhar()
    {
        foreach ($this->_mapa['a'] as $_conexoes => $_distancia)
        {
            $_pontos = explode(',', $_conexoes);
            $this->ligarGPS($_pontos[1]);
        }
    }

    public function ligarGPS($_index, $_nivel = 0, $_conexoes = "")
    {
        $_conexoes .= $_index;
        foreach ($this->_mapa[$_index] as $_caminhos => $_distancia)
        {
            $_pontos = explode(',', $_caminhos);
            if ($_index != 'e')
            {
                if (strpos($_conexoes, $_pontos[1]) === false && $_pontos[1] != 'a')
                {
                    $this->ligarGPS($_pontos[1], $_nivel+1, $_conexoes);
                }
            }
            else
            {
                if (!isset($this->_caminhos[$_conexoes]))
                {
                    $_posicao = 'a,'.substr($_conexoes, 0, 1);
                    $this->_caminhos[$_posicao]['a'.$_conexoes] = 'a'.$_conexoes;
                    $_conexoes = "";
                }
                break;
            }
        }
    }

    public function calcularDistancia()
    {
        foreach ($this->_caminhos as $_chave => $_ponto_inicial)
        {
            foreach ($_ponto_inicial as $_index => $_caminho)
            {
                $_pontos = str_split($_caminho);
                $_distancia = 0;
                $_i = 0;
                while (isset($_pontos[$_i]))
                {
                    if ($_pontos[$_i] != 'e')
                    {
                        $_posicao = $_pontos[$_i].','.$_pontos[$_i+1];
                        $_distancia += $this->_mapa[$_pontos[$_i]][$_posicao];
                    }
                    $_i++;
                }
                $this->_caminhos[$_chave][$_index] = $_distancia;
            }
        }
    }

    public function montarHTML($_html = "")
    {
        $_html .= "<p>Calculando rotas...</p>";
        $_html .= "<p>Ponto inicial: <strong>A</strong>...</p>";
        $_html .= "<p>Ponto final: <strong>E</strong>...</p>";
        foreach ($this->_caminhos as $_index => $_caminhos)
        {
            $_i = 1;
            $_html .= "<p><strong>". strtoupper($_index) ."</strong></p>";
            foreach ($_caminhos as $_caminho => $_distancia)
            {
                $_html .= "<div class=\"gps\">";
                $_html .= "<div>Caminho <span class=\"numero\">{$_i}</span></div>";
                $_pontos = str_split($_caminho);
                foreach ($_pontos as $_ponto)
                {
                    $_ponto = strtoupper($_ponto);
                    $_html .= "<div class=\"ponto\"><div class\"icone esconder-470\"><i style=\"color:red;\"  class=\"fas fa-map-marker-alt\"></i></div><hr class=\"esconder-470\"><span><strong>{$_ponto}</strong></span></div>";
                }
                $_html .= "<div>Distância <span class=\"numero\">{$_distancia}</span></div>";
                $_html .= "</div>";
                $_i++;
            }
            
        }

        parent::montarHTML($_html);
    }
}