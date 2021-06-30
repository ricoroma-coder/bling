<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio3.php';
?>

<html>
    <head>
        <title>Bling - Exercício 3</title>
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
                <form action="" method="POST">
                    <input type="text" placeholder="Insira a data 1" name="data_ini" onkeyup="mascaraData(this)" max="10">
                    <input type="text" placeholder="Insira a data 2" name="data_fim" onkeyup="mascaraData(this)" max="10">
                    <button name="enviar">Enviar</button>
                </form>
            </div>
            <div id="solucoes">
                <div class="solucao">
                    <?php
                        if (isset($_POST['enviar'])) 
                        {
                            $_post = $_POST;
                            $_obj = new Exercicio3();
                            echo $_obj->receberDatas($_post['data_ini'], $_post['data_fim']) . ' dias de diferença.';
                        }
                    ?>
                </div>
            </div>
        </div>

        <script src="../utilitarios/javascript/exercicio3.js"></script>
    </body>
</html>