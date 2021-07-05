<?php

class Basica 
{
    public $_erro = Array();

    public function buscar($_atributo)
    {
        return $this->$_atributo;
    }

    public function atribuir($_atributo, $_valor, $_array = false, $_index = "")
    {
        if ($_array)
        {
            if (empty($_index))
                $this->$_atributo[] = $_valor;
            else
                $this->$_atributo[$_index] = $_valor;
        }
        else
        {
            $this->$_atributo = $_valor;
        }
    }

    public function montarHTML($_html = "")
    {
        echo $_html;
    }
}