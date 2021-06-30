<?php
    include_once __DIR__ . '/../utilitarios/php/classes/exercicio1.php';
?>

<html>
    <head>
        <title>Bling - Exercício 1</title>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <span>1. Escrever um algoritmo que rotacione um array em k posições. Exemplo: o array [1,2,3,4,5,6] se for girado duas posições para a esquerda se torna [3,4,5,6,1,2]. Tente resolver sem usar uma cópia da array.</span>
                </div>
            </div>
            <div id="entradas">
                <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div>
                <form action="" method="POST">
                    <input type="number" placeholder="Posições" name="posicoes">
                    <input type="number" placeholder="Rotações" name="rotacoes">
                    <select name="direcao">
                        <option value="1">ESQUERDA</option>
                        <option value="2">DIREITA</option>
                    </select>
                    <button name="enviar">Enviar</button>
                </form>
            </div>
            <div id="solucoes">
                <div class="solucao">
                    <?php
                        if (isset($_POST['enviar'])) 
                        {
                            $tempoInicial = microtime(true);
                            $_post = $_POST;
                            $_obj = new Exercicio1($_post['posicoes']);
                            $_resultado = $_obj->rotacionarArray($_post['rotacoes'], $_post['direcao']);
                            print_r($_obj->buscar('_array'));
                            echo '<br>Tempo de processamento: '. (microtime(true) - $tempoInicial);
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>