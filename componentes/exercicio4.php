<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio4.php';
?>

<html>
    <head>
        <title>Bling - Exercício 4</title>
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="btn-voltar" onclick="redirecionarIndex()"><i class="fas fa-arrow-circle-left"></i></div>
            <div id="cabecalho">
                <div id="pergunta">
                    <span>4. Receba 6 números representando medidas a,b,c,d,e e f e relacionar quantos e quais triângulos é possível formar usando estas medidas. Exemplo [abc], [abd].</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST" exe="exercicio4.php" id="form">
                    <?php
                        for ($_i = 1; $_i <= 6; $_i++)
                        {
                    ?>
                        <input type="text" placeholder="Medida <?php echo $_i; ?>" name="medida_<?php echo $_i; ?>">
                    <?php
                        }
                    ?>
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

        <script src="../utilitarios/javascript/principal.js"></script>
    </body>
</html>