<?php

/** Como desejamos que as tarefas sejam empilhadas a cada nova inserção,
 *  precisamos criar uma seção para que uma variável especial (variável de
 *  seção) esteja presente a cada nova requisição do formulário, o seja, 
 *  dada vez que o botão for clicado, os itens serão adicionados e exibidos
 *  na tabela, se a seção PHP estiver aberta.
 */
session_start();

$tarefa = array();
if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa['nome'] = $_GET['nome'];

    if (isset($_GET['descricao'])) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }

    if (isset($_GET['prazo'])) {
        $tarefa['prazo'] = $_GET['prazo'];
    } else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if (isset($_GET['concluido'])) {
        $tarefa['concluido'] = $_GET['concluido'];
    } else {
        $tarefa['concluido'] = '';
    }

    $_SESSION['lista_de_tarefas'][] = $tarefa;
}

include "template.php";
