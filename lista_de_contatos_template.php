<!DOCTYPE html>

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
            <label for="descricao">Descrição:
                <br><textarea name="descricao" id="descricao" rows="5" cols="20"></textarea>
            </label><br>
            <label for="nascimento">Data de nascimento:
                <input type="date" name="nascimento" id="nascimento">
            </label><br>
            <label for="favorito">Adicionar aos favoritos ?:
                <input type="checkbox" name="favorito" id="favorito" value="Sim">
            </label><br>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form><br>

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
                        <th>Descrição</th>
                        <th>Data de nascimento</th>
                        <th>Favorito ?</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- EXIBE OS CONTATOS CADASTRADOS -->
                    <?php
                    if (!empty($_SESSION['lista_de_contatos'])) {
                        foreach ($_SESSION['lista_de_contatos'] as $contato): ?>
                            <tr>
                                <td><?php echo $contato['nome'] ?></td>
                                <td><?php echo $contato['telefone'] ?></td>
                                <td><?php echo $contato['email'] ?></td>
                                <td><?php echo $contato['descricao'] ?></td>
                                <td><?php echo $contato['nascimento'] ?></td>
                                <td><?php echo $contato['favorito'] ?></td>
                            </tr>
                        <?php endforeach;
                    } else { ?>
                        <tr>
                            <td colspan="6">Nenhum contato cadastrado</td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </fieldset>
    </form>
</body>

</html>