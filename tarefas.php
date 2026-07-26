<!DOCTYPE html>


<?php
/** Como desejamos que as tarefas sejam empilhadas a cada nova inserção,
 *  precisamos criar uma seção para que uma variável especial (variável de
 *  seção) esteja presente a cada nova requisição do formulário, o seja, 
 *  dada vez que o botão for clicado, os itens serão adicionados e exibidos
 *  na tabela, se a seção PHP estiver aberta.
 */
session_start();
?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap. 04 : Gerenciador de tarefas</title>
</head>

<body>
    <h1>Gerenciador de tarefas</h1>
    <form action="#">
        <fieldset> <!-- CRIA UMA MOLDURA EM VOLTA DO FORMULÁRIO -->
            <legend>Nova tarefa</legend> <!-- NOME DA SEÇÃO DO FIELDSET -->
            <label for="tarefa">Tarefa:
                <input type="text" name="tarefa" id="tarefa">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <?php   // TESTE PARA EXIBIR A PALAVRA INFORMADA

    if (isset($_GET['tarefa'])) {
        $_SESSION['lista_de_tarefas'][] = $_GET['tarefa'];
    }

    $lista_de_tarefas = array();

    if (isset($_SESSION['lista_de_tarefas'])) {
        $lista_de_tarefas = $_SESSION['lista_de_tarefas'];
    }
    ?>

    <table>
        <tr>
            <th>Tarefas cadastradas:</th>
        </tr>

        <!-- EXBE AS TAREFAS CADASTRADAS POR MEIO DE UM 'foreach' 
             DE FORMA REVERSA, OU SEJA, INICIANDO DO ÚLTIMO  A SER
             ACRESCENTADO À LISTA -->
        <?php foreach (array_reverse($lista_de_tarefas) as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>