<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio2.php';
?>

<html>
    <head>
        <title>Bling - Exercício 2</title>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <span>2. Criar um algoritmo que leia um vetor de números e reordene este vetor contendo no início os números pares de forma crescente e, depois, os ímpares de forma decrescente.</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST">
                    <input type="text" placeholder="Números. Ex: 1,2,3,4" name="vetor">
                    <button name="enviar">Enviar</button>
                </form>
            </div>
            <div id="solucoes">
                <div class="solucao">
                    <?php
                        if (isset($_POST['enviar'])) 
                        {
                            $_post = $_POST;
                            $_obj = new Exercicio2($_post['vetor']);
                            $_obj->reordenarArray();
                            print_r($_obj->buscar('_array'));
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>