<?php

/** Como desejamos que as tarefas sejam empilhadas a cada nova inserção,
 *  precisamos criar uma seção para que uma variável especial (variável de
 *  seção) esteja presente a cada nova requisição do formulário, o seja, 
 *  dada vez que o botão for clicado, os itens serão adicionados e exibidos
 *  na tabela, se a seção PHP estiver aberta.
 */
session_start();

$tarefa = array(); // CADA TAREFA, COMPOSTA POR 'nome', 'descricao', ETC, SERÁ ARMAZENADA EM UMA array

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa['nome'] = $_GET['nome'];
    $tarefa['descricao'] = $_GET['descricao'] ?? '';
    $tarefa['prazo'] = $_GET['prazo'] ?? '';
    $tarefa['prioridade'] = $_GET['prioridade'] ?? 'Baixa';
    $tarefa['concluido'] = isset($_GET['concluido']) ? 'Sim' : 'Não';

    $_SESSION['lista_de_tarefas'][] = $tarefa; // APOS ATRIBUIR CADA VALOR AO ARRAY '$tarefa', ESTE SERÁ
}                                              // ADICIONADO À VARIÁVEL GLOBAL DA SESSION.

include "template.php"; // FAZ A LIGAÇÃO ENTRE OS ARQUIVOS DO PROJETO, OU SEJA,
                        // $_SESSION['lista_de_tarefas'][] SERÁ USADA NO TEMPLATE
