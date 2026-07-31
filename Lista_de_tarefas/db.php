<?php

$server = '127.0.0.1';
$user = 'root';
$password = '';
$db = 'db_tarefas';

// // CONECTA AO BD DO MYSQL 
$connection = mysqli_connect($server, $user, $password, $db);

if (!$connection) {
    echo "Falha ao conectar ao Banco de dados: " . mysqli_connect_error();
    die();
}

function buscar_tarefas(mysqli $connection): array
{
    $query = 'SELECT * FROM tarefas';                    // PEGA TODAS AS TAREFAS NA TABELA 'tarefas'
    $resultado = mysqli_query($connection, $query);      // ARMAZENA OS RESULTADOS DA QUERY

    $tarefas = array();         // CRIA UMA ARRAY VAZIA
    while ($tarefa = mysqli_fetch_assoc($resultado)) {  // CADA LINHA É ARMAZENADA EM 'tarefa'
        $tarefas[] = $tarefa;                           // AO FINAL TODAS AS TAREFAS VÃO PARA 'tarefas'
    }

    return $tarefas;            // RETORNA A ARRAY DE TAREFAS (VAZIA OU COM AS TAREFAS)
}
