<!-- RECEBER OS DADOS DO FORMULÁRIO E ARMAZENAR NA SESSION -->
<?php

session_start();
$contato = array(); // ARRAY ONDE OS DADOS DOS CONTATOS SERÃO ARMAZENADOS

if (isset($_POST['nome']) && $_POST['nome'] != '') {
    // CRIAÇÃO DE UM CONTATO TEMPORÁRIO PARA ARMAZENAS OS VALORES RECEBEIDO PELO FORM
    $contato = [
        'nome' => $_POST['nome'] ?? [],
        'telefone' => $_POST['telefone'] ?? [],
        'email' => $_POST['email'] ?? [],
        'descricao' => $_POST['descricao'] ?? [],
        'nascimento' => $_POST['nascimento'] ?? [],
        'favorito' => $_POST['favorito'] ?? []
    ];

    /** ARMAZENA CONTATO EM UM ARRAY DA SEÇÃO */
    $_SESSION['lista_de_contatos'][] = $contato;
}

include "lista_de_contatos_template.php";
?>