<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio4.php';
?>

<html>
    <head>
        <title>Bling - Exercício 4</title>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <span>4. Receba 6 números representando medidas a,b,c,d,e e f e relacionar quantos e quais triângulos é possível formar usando estas medidas. Exemplo [abc], [abd].</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST">
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
                <div class="solucao">
                    <?php
                        if (isset($_POST['enviar'])) 
                        {
                            $_post = $_POST;
                            $_array = Array();
                            for ($_i = 1; $_i <= 6; $_i++)
                            {
                                $_array[$_i] = $_post["medida_{$_i}"];
                            }
                            $_obj = new Exercicio4($_array);
                            $_obj->combinar();
                            echo '<pre>'.var_export($_obj->buscar('_combinacoes'), true).'</pre>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>