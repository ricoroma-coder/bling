<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio1.php';
?>

<html>
    <head>
        <title>Bling - Exercício 1</title>
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="btn-voltar" onclick="redirecionarIndex()"><i class="fas fa-arrow-circle-left"></i></div>
            <div id="cabecalho">
                <div id="pergunta">
                    <span class="numero">1.</span> Escrever um algoritmo que rotacione um array em k posições. Exemplo: o array [1,2,3,4,5,6] se for girado duas posições para a esquerda se torna [3,4,5,6,1,2]. Tente resolver sem usar uma cópia da array.
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST" exe="exercicio1.php" id="form">
                    <input type="number" placeholder="Posições" name="posicoes" min="0">
                    <input type="number" placeholder="Rotações" name="rotacoes" min="0">
                    <select name="direcao">
                        <option value="1">ESQUERDA</option>
                        <option value="2">DIREITA</option>
                    </select>
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