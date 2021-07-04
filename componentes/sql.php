<?php

include_once __DIR__ . "/../utilitarios/php/classes/component.php";

?>

<html>
    <head>
        <title>Bling - SQL</title>
    </head>
    <body>
        <div id="content">
            <div id="cabecalho">
                <div id="pergunta">
                    <div class="title">SQL - modelo relacional</div>
                    <span>Considere o diagrama ER abaixo:</span>
                    <div>
                        <img src="../utilitarios/img/sql.png" alt="Exercicio 8">
                    </div>
                    <div>
                        <span>Com base nele:</span>
                        <ol>
                            <li>Defina as cardinalidades mínimas e máximas.</li>
                            <li>Crie o esquema do banco e apresente o DDL utilizado.</li>
                            <li>Apresente o SQL para as seguintes consultas:</li>
                            <ol type="a">
                                <li>Atores do filme com título “XYZ”.</li>
                                <li>Filmes que o ator de nome “FULANO” participou.</li>
                                <li>Listar os filmes do ano 2015 ordenados pela quantidade de atores participantes e pelo título em ordem alfabética.</li>
                                <li>Listar os atores que trabalharam em filmes cujo diretor foi “SPIELBERG”.</li>
                            </ol>
                        </ol>
                    </div>
                </div>
            </div>
            <div id="entradas">
                <!-- <div class="apresentacao">
                    <span>Me ajude a resolver esse exercício:</span>
                </div> -->
            </div>
            <div id="solucoes">
                <div class="solucao">
                    <?php
                        echo '1.<br>';
                        echo 'N \'ATORES\' participam de N \'FILMES\'.<br>';
                        echo 'N \'FILMES\' podem conter N \'ATORES\'.<br>';
                        echo '1 \'DIRETOR\' dirige N \'FILMES\'.<br>';
                        echo 'N \'FILMES\' podem ser dirigidos por 1 \'DIRETOR\'.<br>';
                        echo '<br>';
                        echo '<br>2.<br>';
                        echo 'CREATE DATABASE PRODUTORA_BLING;<br>
                        CREATE TABLE FILME(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, TITULO VARCHAR(45) NOT NULL, ANO YEAR(4) NOT NULL);<br>
                        CREATE TABLE ATOR(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, NOME VARCHAR(45) NOT NULL);<br>
                        CREATE TABLE ELENCO(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, ID_ATOR INT NOT NULL, ID_FILME INT NOT NULL);<br>
                        CREATE TABLE DIRETOR(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, NOME VARCHAR(45) NOT NULL);<br>
                        CREATE TABLE DIRECAO(ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, ID_DIRETOR INT NOT NULL, ID_FILME INT NOT NULL);<br>';
                        echo '<br><br>';
                        echo '3.<br>';
                        echo 'Para conferir essa atividade, faça o download do Arquivo SQL abaixo. (OBS: Os exercícios estão no fim do arquivo)<br>';
                    ?>
                    <a href="../utilitarios/arquivos/sql.sql">Arquivo SQL</a>
                </div>
            </div>
        </div>
    </body>
</html>