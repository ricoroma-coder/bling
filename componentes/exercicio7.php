<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio7.php';
?>

<html>
    <head>
        <title>Bling - Exercício 7</title>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <span>7. Um algoritmo deve armazenar o mapa abaixo e listar os caminhos entre os pontos A e E.</span>
                    <img src="../utilitarios/img/exercicio7.png" alt="Exercicio 7">
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
                        $_obj = new Exercicio7([]);
                        $_obj->buscarCaminhos();
                        echo '<pre>';
                        echo var_export($_obj->buscar('_caminhos'), true);
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>