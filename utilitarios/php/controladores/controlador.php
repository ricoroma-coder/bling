<?php

$_post = json_decode($_POST['json']);
$_data = Array();

foreach ($_post as $_valor)
{
    $_aux = explode('=', $_valor);
    if ($_aux[0] == 'controlador')
        $_data['classe'] = 'Controlador' . ucwords(explode('.', $_aux[1])[0]);
    $_data[$_aux[0]] = $_aux[1];
}

include_once __DIR__ . "/" . $_data['controlador'];

$_controlador = new $_data['classe']();
$_controlador->processar($_data);