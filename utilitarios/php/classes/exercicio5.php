<?php

include_once __DIR__ . "/basica.php";

class Exercicio5 extends Basica 
{
    protected $_texto;
    protected $_subtexto;
    protected $_ocorrencias;

    public function __construct($_texto, $_subtexto)
    {
        $this->_texto = $_texto;
        $this->_subtexto = $_subtexto;
        $this->_ocorrencias = Array();
    }

    public function encontrarOcorrencia()
    {
        $_posicao = null;
        $_subtexto = "";
        $_letras = str_split($this->_texto);
        foreach ($_letras as $_chave => $_letra)
        {
            $_subtexto .= $_letra;
            $_posicao = $_chave;
            if (substr($this->_subtexto, 0, strlen($_subtexto)) != substr($_subtexto, 0, strlen($_subtexto)))
            {
                $_posicao = null;
                $_subtexto = "";
            }
            if ($this->_subtexto == $_subtexto) 
                $this->_ocorrencias[$_posicao] = $_posicao;
        }
    }
}