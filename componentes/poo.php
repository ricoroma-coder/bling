<?php

include_once __DIR__ . "/../utilitarios/php/classes/component.php";
include_once __DIR__ . "/../utilitarios/php/classes/composite.php";
include_once __DIR__ . "/../utilitarios/php/classes/element.php";

?>

<html>
    <head>
        <title>Bling - Exercício 8</title>
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="btn-voltar" onclick="redirecionarIndex()"><i class="fas fa-arrow-circle-left"></i></div>
            <div id="cabecalho">
                <div id="pergunta">
                    <div class="title">Programação orientada à objetos e design patterns</div>
                    <span>Implementar o padrão iterator no modelo abaixo. Apresentar o diagrama de classes e pseudocódigo.</span>
                    <div class="img-holder">
                        <img src="../utilitarios/img/exercicio8.png" alt="Exercicio 8">
                    </div>
                </div>
            </div>
            <div id="solucoes">
                <div id="terminal">
                    <div class="barra">
                        <div class="header">
                            <img src="../utilitarios/img/terminal.png" alt="">
                            <span>Terminal</span>
                        </div>
                        <div class="options">
                            <div class="scroll fas fa-angle-up opened"></div>
                        </div>
                    </div>
                    <div class="terminal-content opened">
                        <p>© Terminal by Roma Technologies</p>
                        <p class="linha-inicial"><?php echo __FILE__; ?>></p>
                        <?php
                            echo '<p><strong class="object">Component</strong></p>';
                            $_component = new Component();
                            $_component->add('Circle');
                            $_component->add('Square');
                            $_component->add('Line');

                            echo '<p>';
                            foreach($_component as $_key => $_item){
                                echo "<span>Item(<span class=\"numero\">{$_key}</span>): {$_item}</span><br>";
                            }
                            echo '</p>';

                            echo '<hr style="margin:10px;">';
                            echo '<p><strong class="object">Composite</strong></p>';
                            $_composite = new Composite();
                            $_composite->add('Circle');
                            $_composite->add('Square');
                            $_composite->add('Line');

                            echo '<p>';
                            foreach($_composite->getElements() as $_key => $_item){
                                echo "<span>Item(<span class=\"numero\">{$_key}</span>): {$_item}</span><br>";
                            }
                            echo '</p>';

                            echo '<hr style="margin:10px;">';
                            echo '<p><strong class="object">Element</strong></p>';
                            $_element = new Element();
                            $_element->add('Circle');
                            $_element->add('Square');
                            $_element->add('Line');

                            echo '<p>';
                            foreach($_element->getElements() as $_key => $_item){
                                echo "Item(<span class=\"numero\">{$_key}</span>): ".$_item."<br>";
                            }
                            echo '</p>';

                            echo '<hr style="margin:10px;">';
                            echo '<div class="img-holder">';
                            echo '<p class="title">Pseudocódigo</p>';
                            echo '<img src="../utilitarios/img/pseudocodigo.png" alt="Pseudocódigo">';
                            echo '</div>';
                            echo '<p class="escondido"><a href="../utilitarios/img/pseudocodigo.png">Pseudocódigo</a></p>';

                            echo '<hr style="margin:10px;">';
                            echo '<div class="img-holder">';
                            echo '<p class="title">Diagrama de classes</p>';
                            echo '<img src="../utilitarios/img/diagrama_classes.png" alt="Diagrama de Classes">';
                            echo '</div>';
                            echo '<p class="escondido"><a href="../utilitarios/img/diagrama_classes.png">Diagrama de Classes</a></p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="../utilitarios/javascript/principal.js"></script>
    </body>
</html>