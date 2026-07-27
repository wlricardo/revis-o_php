<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap. 04 : Desafio - Lista de contatos</title>
</head>

<body>
    <h1>Lista de contatos</h1>

    <!-- FORMULÁRIO DE CADASTRO -->
    <form action="#" method="POST">
        <fieldset>
            <legend>Novo contado</legend>
            <label for="nome">Nome:
                <input type="text" name="nome" id="nome" required placeholder=" Insira seu nome">
            </label><br>
            <label for="telefone">Telefone:
                <input type="tel" name="telefone" id="telefone" required placeholder="Insira seu telefone">
            </label><br>
            <label for="email">Email:
                <input type="email" name="email" id="email" required placeholder="Insira seu e-mail">
            </label><br>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form><br>

    <!-- RECEBER OS DADOS DO FORMULÁRIO E ARMAZENAR NA SESSION -->
    <?php
    if (isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email'])) {
        // CRIAÇÃO DE UM CONTATO TEMPORÁRIO PARA ARMAZENAS OS VALORES RECEBEIDO PELO FORM
        $novo_contato = [
            'nome' => $_POST['nome'],
            'telefone' => $_POST['telefone'],
            'email' => $_POST['email']
        ];

        /** ARMAZENA CONTATO EM UM ARRAY DA SEÇÃO */
        $_SESSION['lista_de_contatos'][] = $novo_contato;
    }

    // CRIAÇÃO DE UMA VARIÁVEL INICIALMENTE VAZIA PARA RECEBER OS VALORES
    $lista_de_contatos = array();

    /** SE A SEÇÃO EXISTIR, PASSARMOS OS VALORES PARA A VARIÁVEL CRIADA ANTERIORMENTE.
     *  AO CLICAR NOVAMENTE NO BOTÃO INSERIR, OS VALORES SERÃO ACRESCENTADOS
     */
    if (!empty($_SESSION['lista_de_contatos'])) {
        $lista_de_contatos = $_SESSION['lista_de_contatos'];
    } else {
        echo "<tr><td colspan='3'>" . "Nenhum contato cadastrado" . "</td><tr>";
    }
    ?>

    <!-- TABELA DE CONTATOS CADASTRADOS -->
    <form action="#">
        <fieldset>
            <legend>Contatos cadastrados</legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- EXIBE OS CONTATOS CADASTRADOS -->
                    <?php foreach ($lista_de_contatos as $contato):  ?>
                        <tr>
                            <td><?php echo $contato['nome'] ?></td>
                            <td><?php echo $contato['telefone'] ?></td>
                            <td><?php echo $contato['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </fieldset>
    </form>
</body>

</html>