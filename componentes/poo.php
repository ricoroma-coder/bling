<?php

include_once __DIR__ . "/../utilitarios/php/classes/component.php";
include_once __DIR__ . "/../utilitarios/php/classes/composite.php";
include_once __DIR__ . "/../utilitarios/php/classes/element.php";

?>

<html>
    <head>
        <title>Bling - Exercício 8</title>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <div class="title">Programação orientada à objetos e design patterns</div>
                    <span>Implementar o padrão iterator no modelo abaixo. Apresentar o diagrama de classes e pseudocódigo.</span>
                    <img src="../utilitarios/img/exercicio8.png" alt="Exercicio 8">
                </div>
            </div>
            <div id="entradas">
                <!-- <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div> -->
            </div>
            <div id="solucoes">
                <div class="solucao">
                <?php
                    echo 'Component<br>';
                    $_component = new Component();
                    $_component->add('Circle');
                    $_component->add('Square');
                    $_component->add('Line');

                    foreach($_component as $_key => $_item){
                        echo "Item({$_key}): {$_item}<br>";
                    }

                    echo '<hr>';
                    echo 'Composite<br>';
                    $_composite = new Composite();
                    $_composite->add('Circle');
                    $_composite->add('Square');
                    $_composite->add('Line');

                    foreach($_composite->getElements() as $_key => $_item){
                        echo "Item({$_key}): {$_item}<br>";
                    }

                    echo '<hr>';
                    echo 'Element<br>';
                    $_element = new Element();
                    $_element->add('Circle');
                    $_element->add('Square');
                    $_element->add('Line');

                    foreach($_element->getElements() as $_key => $_item){
                        echo "Item({$_key}): ".print_r($_item)."<br>";
                    }
                ?>
                </div>
            </div>
        </div>
    </body>
</html>