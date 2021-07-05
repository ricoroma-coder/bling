<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio3.php';
?>

<html>
    <head>
        <title>Bling - Exercício 3</title>
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <span>3. Escreva um algoritmo que calcule o tempo em dias a partir de uma data inicial e final recebidos no formato dd/mm/aaaa. Não deve usar funções de data e hora.</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST" exe="exercicio3.php" id="form">
                    <input type="text" placeholder="Insira a data 1" name="data_ini" onkeyup="mascaraData(this)" max="10">
                    <input type="text" placeholder="Insira a data 2" name="data_fim" onkeyup="mascaraData(this)" max="10">
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

        <script src="../utilitarios/javascript/exercicio3.js"></script>
        <script src="../utilitarios/javascript/principal.js"></script>
    </body>
</html>