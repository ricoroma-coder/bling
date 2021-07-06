<?php

include_once __DIR__ . "/../utilitarios/php/classes/component.php";

?>

<html>
    <head>
        <title>Bling - SQL</title>
        <link rel="stylesheet" href="../utilitarios/css/media.css">
        <link rel="stylesheet" href="../utilitarios/css/principal.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div id="content">
            <div id="btn-voltar" onclick="redirecionarIndex()"><i class="fas fa-arrow-circle-left"></i></div>
            <div id="cabecalho">
                <div id="pergunta">
                    <div class="title">SQL - modelo relacional</div>
                    <span>Considere o diagrama ER abaixo:</span>
                    <div class="img-holder">
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
                        <p class="linha-inicial"><?php echo __FILE__; ?><span>></span></p>
                        <?php
                            echo '<p><span class="numero">1</span>.</p><p>';
                            echo '<span><span class="tipagem">N</span> \'<span class="object">ATORES</span>\' participam de <span class="tipagem">N</span> \'<span class="object">FILMES</span>\'.</span><br>';
                            echo '<span><span class="tipagem">N</span> \'<span class="object">FILMES</span>\' podem conter <span class="tipagem">N</span> \'<span class="object">ATORES</span>\'.</span><br>';
                            echo '<span><span class="tipagem">1</span> \'<span class="object">DIRETOR</span>\' dirige <span class="tipagem">N</span> \'<span class="object">FILMES</span>\'.</span><br>';
                            echo '<span><span class="tipagem">N</span> \'<span class="object">FILMES</span>\' podem ser dirigidos por <span class="tipagem">1</span> \'<span class="object">DIRETOR</span>\'.</span><br>';
                            echo '</p>';
                            
                            echo '<p><span class="numero">2</span>.</p><p>';
                            echo '<span class="sql">CREATE DATABASE</span> PRODUTORA_BLING;</span><br>
                            <span class="sql">CREATE TABLE</span> <span class="tabela">FILME</span>(ID <span class="sql">INT NOT NULL PRIMARY KEY</span> AUTO_INCREMENT, TITULO <span class="sql">VARCHAR</span>(<span class="numero">45</span>) <span class="sql">NOT NULL</span>, ANO <span class="tabela">YEAR</span>(<span class="numero">4</span>) <span class="sql">NOT NULL</span>);<br>
                            <span class="sql">CREATE TABLE</span> <span class="tabela">ATOR</span>(ID <span class="sql">INT NOT NULL PRIMARY KEY</span> AUTO_INCREMENT, NOME <span class="sql">VARCHAR</span>(<span class="numero">45</span>) <span class="sql">NOT NULL</span>);<br>
                            <span class="sql">CREATE TABLE</span> <span class="tabela">ELENCO</span>(ID <span class="sql">INT NOT NULL PRIMARY KEY</span> AUTO_INCREMENT, ID_ATOR <span class="sql">INT NOT NULL</span>, ID_FILME <span class="sql">INT NOT NULL</span>);<br>
                            <span class="sql">CREATE TABLE</span> <span class="tabela">DIRETOR</span>(ID <span class="sql">INT NOT NULL PRIMARY KEY</span> AUTO_INCREMENT, NOME <span class="sql">VARCHAR</span>(<span class="numero">45</span>) <span class="sql">NOT NULL</span>);<br>
                            <span class="sql">CREATE TABLE</span> <span class="tabela">DIRECAO</span>(ID <span class="sql">INT NOT NULL PRIMARY KEY</span> AUTO_INCREMENT, ID_DIRETOR <span class="sql">INT NOT NULL</span>, ID_FILME <span class="sql">INT NOT NULL</span>);<br>';
                            echo '</p>';

                            echo '<p><span class="numero">3</span>.</p><p>';
                            echo 'Para conferir essa atividade, faça o download do Arquivo SQL abaixo. (<span class="observacao">OBS:</span> Os exercícios estão no fim do arquivo)<br>';
                            echo '<a href="../utilitarios/arquivos/sql.sql">Arquivo SQL</a>';
                            echo '</p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="../utilitarios/javascript/principal.js"></script>
    </body>
</html>