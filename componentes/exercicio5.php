<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio5.php';
?>

<html>
    <head>
        <title>Bling - Exercício 5</title>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <span>5. Um algoritmo deve buscar um sub-texto dentro de um texto fornecido. (Não usar funções de busca em string).</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST">
                    <textarea placeholder="Digite o texto" name="frase"></textarea>
                    <input type="text" placeholder="Encontrar no texto" name="subtexto">
                    <button name="enviar">Enviar</button>
                </form>
            </div>
            <div id="solucoes">
                <div class="solucao">
                    <?php
                        if (isset($_POST['enviar'])) 
                        {
                            $_post = $_POST;
                            $_obj = new Exercicio5($_post['frase'], $_post['subtexto']);
                            $_obj->encontrarOcorrencia();
                            echo '<pre>'.var_export($_obj->buscar('_ocorrencias'), true).'</pre>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>