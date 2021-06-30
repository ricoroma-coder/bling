<?php

include_once __DIR__ . "/basica.php";

class Exercicio3 extends Basica 
{
    private $_meses;

    public function __construct()
    {
        $this->_meses = Array(31,28,31,30,31,30,31,31,30,31,30,31);
    }

    public function receberDatas($_data_ini, $_data_fim)
    {
        if (implode('', array_reverse(explode('/', $_data_ini))) > implode('', array_reverse(explode('/', $_data_fim))))
        {
            $_aux = $_data_ini;
            $_data_ini = $_data_fim;
            $_data_fim = $_aux;
            unset($_aux);
        }
        $_data_ini = explode('/', $_data_ini);
        $_data_fim = explode('/', $_data_fim);

        if (($_validar = $this->datasValidas($_data_ini, $_data_fim)) !== true)
            return implode("<br>", $_validar);

        return $this->calcularDiaMesAno($_data_ini, $_data_fim);
    }

    public function datasValidas($_data_i, $_data_f)
    {
        $_mensagens = Array();
        if ((int)$_data_i[1] > 12 || (int)$_data_i[1] < 1 || (int)$_data_f[1] > 12 || (int)$_data_f[1] < 1)
            $_mensagens[] = 'Mês não pode ser maior que 12 ou menor que 1';
        if ((int)$_data_i[0] < 1 || (int)$_data_i[0] > 31 || (int)$_data_f[0] < 1 || (int)$_data_f[0] > 31)
        {
            $_mensagens[] = 'Quantidade de dias inválida';
        }
        else
        {
            if (isset($this->_meses[(int)$_data_i[1] - 1]))
            {
                if ($_data_i[0] > $this->_meses[(int)$_data_i[1] - 1])
                    $_mensagens[] = "O mês {$_data_i[1]} não tem dia {$_data_i[0]}";
            }
            
            if (isset($this->_meses[(int)$_data_f[1] - 1]))
            {
                if ($_data_f[0] > $this->_meses[(int)$_data_f[1] - 1])
                    $_mensagens[] = "O mês {$_data_f[1]} não tem dia {$_data_f[0]}";
            }
        }

        if (empty($_mensagens))
            return true;

        return $_mensagens;
    }

    public function calcularDiaMesAno($_data_i, $_data_f)
    {
        $_dias = 0;
        if ($_data_i[2] == $_data_f[2])
        {
            if ($_data_i[1] != $_data_f[1])
            {
                $_dias += $this->_meses[$_data_i[1] - 1] - $_data_i[0];
                for ($_i = (int)$_data_i[1]; $_i < (int)$_data_f[1]; $_i++)
                {
                    if ($_i == ($_data_f[1] - 1))
                        $_dias += $_data_f[0];
                    else
                        $_dias += $this->_meses[$_i];
                }
            }
            else
            {
                if ($_data_f[0] != $_data_i[0])
                    $_dias += $_data_f[0] - $_data_i[0];
                else
                    $_dias += $_data_f[0];
            }
        }
        else
        {
            for ($_i = $_data_i[2]; $_i <= $_data_f[2]; $_i++)
            {
                if ($_i == $_data_i[2])
                    $_dias += $this->calcularDiaMesAno($_data_i, ['31', '12', $_data_i[2]]);
                else if ($_i == $_data_f[2])
                    $_dias += $this->calcularDiaMesAno(['01', '01', $_data_f[2]], $_data_f);
                else
                    $_dias += $this->calcularDiaMesAno(['01', '01', $_i], ['31', '12', $_i]);
            }
        }
        
        return $_dias;
    }
}