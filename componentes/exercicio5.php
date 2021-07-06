<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio5.php';
?>

<html>
    <head>
        <title>Bling - Exercício 5</title>
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="btn-voltar" onclick="redirecionarIndex()"><i class="fas fa-arrow-circle-left"></i></div>
            <div id="cabecalho">
                <div id="pergunta">
                    <span>5. Um algoritmo deve buscar um sub-texto dentro de um texto fornecido. (Não usar funções de busca em string).</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST" exe="exercicio5.php" id="form">
                    <textarea placeholder="Digite o texto" name="frase"></textarea>
                    <input type="text" placeholder="Encontrar no texto" name="subtexto">
                    <button name="enviar">Enviar</button>
                </form>
            </div>
            <div id="solucoes">
                <div id="terminal">
                    <div class="barra">
                        <div class="header">
                            <img src="../utilitarios/img/terminal.png" alt="">
                            <span>Terminal</span>
                        </div>
                        <div class="options">
                            <div class="clean fas fa-ban"></div>
                            <div class="scroll fas fa-angle-up opened"></div>
                        </div>
                    </div>
                    <div class="terminal-content opened">
                        <p>© Terminal by Roma Technologies</p>
                        <p class="linha-inicial"><?php echo __FILE__; ?>></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="../utilitarios/javascript/principal.js"></script>
    </body>
</html>