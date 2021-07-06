<html>
    <head>
        <title>Bling - Página Inicial</title>
        <link rel="stylesheet" href="utilitarios/css/principal.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho-inicial">
                <span class="title">bling<i class="exclamation fas fa-exclamation"></i></span>
            </div>
            <div id="itens">

                <?php
                    $_array = Array(
                        'Exercício 1' => "Escrever um algoritmo que rotacione um array em k posições. Exemplo: o array [1,2,3,4,5,6] se for girado duas posições para a esquerda se torna [3,4,5,6,1,2]. Tente resolver sem usar uma cópia da array.",
                        'Exercício 2' => "Criar um algoritmo que leia um vetor de números e reordene este vetor contendo no início os números pares de forma crescente e, depois, os ímpares de forma decrescente.",
                        'Exercício 3' => "Escreva um algoritmo que calcule o tempo em dias a partir de uma data inicial e final recebidos no formato dd/mm/aaaa. Não deve usar funções de data e hora.",
                        'Exercício 4' => "Receba 6 números representando medidas a,b,c,d,e e f e relacionar quantos e quais triângulos é possível formar usando estas medidas. Exemplo [abc], [abd]...",
                        'Exercício 5' => "Um algoritmo deve buscar um sub-texto dentro de um texto fornecido. (Não usar funções de busca em string).",
                        'Exercício 6' => "Criar um algoritmo que teste se dois retângulos se sobrepõem em um plano cartesiano e calcule a área do retângulo criado pela sobreposição. Deve receber como entrada dois retângulos formados por pontos, ex: (0,0),(2,2),(2,0),(0,2),(1,0),(1,2),(6,0),(6,2) e gerar uma saída informando a área calculada ou zero se não ocorrer sobreposição",
                        'Exercício 7' => "Um algoritmo deve armazenar o mapa abaixo e listar os caminhos entre os pontos A e E.",
                        'POO' => "Programação orientada à objetos e design patterns Implementar o padrão iterator no modelo abaixo. Apresentar o diagrama de classes e pseudocódigo.",
                        'SQL' => "SQL - modelo relacional. Considere o diagrama ER abaixo:",
                    );

                    foreach ($_array as $_exercicio => $_enunciado)
                    {
                        $_arquivo = substr($_exercicio, -1);
                        if (is_numeric($_arquivo))
                            $_arquivo = 'exercicio'.$_arquivo.'.php';
                        else
                            $_arquivo = strtolower($_exercicio).'.php';
                ?>

                    <div class="item closed">
                        <div class="img-holder">
                            <div class="text-img"><?php echo $_exercicio; ?></div>
                        </div>
                        <div class="content">
                            <div class="text">
                                <span><?php echo $_enunciado; ?></span>
                            </div>
                            <div class="option">
                                <div onclick="linkarPagina(this)" href="<?php echo $_arquivo; ?>">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </div>
                                <div style="text-align: right;">
                                    <span class="ver-mais" onclick="abrirItem(this)">Ver mais...</span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    }
                ?>
            </div>
        </div>

        <script src="utilitarios/javascript/principal.js"></script>
    </body>
</html>