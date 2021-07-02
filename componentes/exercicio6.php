<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio6.php';
?>

<html>
    <head>
        <title>Bling - Exercício 6</title>
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
                <form action="" method="POST">
                    <div>
                        <span>Retângulo 1</span>
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
                        <span>Retângulo 2</span>
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
                <div class="solucao">
                    <?php
                        if (isset($_POST['enviar'])) 
                        {
                            $_post = $_POST;
                            $_auxiliar = Array();
                            $_obj = new Exercicio6();
                            for ($_i = 1; $_i <= 2; $_i++)
                            {
                                for ($_j = 0; $_j < 4; $_j++)
                                {
                                    $_auxiliar[$_i][$_j] = $_post["ret_{$_i}_med_{$_j}"];
                                }
                                $_obj->atribuir("_ret_{$_i}", $_auxiliar[$_i]);
                            }
                            $_obj->montarMapa();
                            $_obj->detectarSobreposicao();
                            $_forma = $_obj->buscar('_novo_ret');
                            echo (!isset($_forma['forma']) ? "Não é uma forma sobreposta" : "{$_forma['forma']} - Área: {$_forma['area']}m²");
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>