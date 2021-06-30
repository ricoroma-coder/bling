<?php

class Basica 
{
    public function buscar($_atributo)
    {
        return $this->$_atributo;
    }

    public function atribuir($_atributo, $_valor)
    {
        $this->$_atributo = $_valor;
    }
}