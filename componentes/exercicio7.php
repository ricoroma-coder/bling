<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio7.php';
?>

<html>
    <head>
        <title>Bling - Exercício 7</title>
        <link rel="stylesheet" href="../utilitarios/css/media.css">
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="../utilitarios/css/exercicio7.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="btn-voltar" onclick="redirecionarIndex()"><i class="fas fa-arrow-circle-left"></i></div>
            <div id="cabecalho">
                <div id="pergunta">
                    <span>7. Um algoritmo deve armazenar o mapa abaixo e listar os caminhos entre os pontos A e E.</span>
                    <div class="img-holder">
                        <img src="../utilitarios/img/exercicio7.png" alt="Exercicio 7">
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
                        <p class="linha-inicial"><?php echo __FILE__; ?><span>></span></p>
                        <?php
                            $_obj = new Exercicio7([]);
                            $_obj->buscarCaminhos();
                            $_obj->montarHTML();
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="../utilitarios/javascript/principal.js"></script>
    </body>
</html>