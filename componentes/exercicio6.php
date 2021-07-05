<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio6.php';
?>

<html>
    <head>
        <title>Bling - Exercício 6</title>
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="../utilitarios/css/exercicio6.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <span>6. Criar um algoritmo que teste se dois retângulos se sobrepõem em um plano cartesiano e calcule a área do retângulo criado pela sobreposição. Deve receber como entrada dois retângulos formados por pontos, ex: (0,0),(2,2),(2,0),(0,2),(1,0),(1,2),(6,0),(6,2) e gerar uma saída informando a área calculada ou zero se não ocorrer sobreposição.</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST" exe="exercicio6.php" id="form">
                    <div>
                        <span class="descricao">Retângulo 1</span>
                        <?php 
                            for ($_i = 0; $_i < 4; $_i++)
                            {
                        ?>
                            <input type="text" placeholder="Medida <?php echo $_i; ?>" name="ret_1_med_<?php echo $_i; ?>">
                        <?php 
                            } 
                        ?>
                    </div>
                    <div>
                        <span class="descricao">Retângulo 2</span>
                        <?php 
                            for ($_i = 0; $_i < 4; $_i++)
                            {
                        ?>
                            <input type="text" placeholder="Medida <?php echo $_i; ?>" name="ret_2_med_<?php echo $_i; ?>">
                        <?php 
                            } 
                        ?>
                    </div>
                    
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