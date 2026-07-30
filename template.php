<!DOCTYPE html>

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
            <label for="nome">Tarefa:
                <input type="text" name="nome" id="nome" />
            </label><br>

            <label for="descricao">Descrição (Opcional):
                <br><textarea name="descricao" id="descricao"></textarea>
            </label><br>

            <label for="prazo">Prazo (Opcional):
                <input type="date" name="prazo" />
            </label>

            <fieldset>
                <legend>Prioridade:</legend>
                <label for="prioridade">
                    <input type="radio" name="prioridade" value="baixa" checked />Baixa
                    <input type="radio" name="prioridade" value="media" />Média
                    <input type="radio" name="prioridade" value="alta" />Alta
                </label>
            </fieldset>

            <label for="concluido">Tarefa concluída ?
                <input type="checkbox" name="concluido" id="sim" value="Sim" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

    <br>
    <table border="1">
        <tr>
            <th>Tarefa</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída ?</th>
        </tr>

        <!-- EXBE AS TAREFAS CADASTRADAS POR MEIO DE UM 'foreach' 
             DE FORMA REVERSA, OU SEJA, INICIANDO DO ÚLTIMO  A SER
             ACRESCENTADO À LISTA -->

        <?php
        $lista_de_tarefas = $_SESSION['lista_de_tarefas'] ?? [];    // RECUPERA A LISTA DE TAREFAS DA SESSION
        foreach (array_reverse($lista_de_tarefas) as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?php echo $tarefa['prazo']; ?></td>
                <td><?php echo $tarefa['prioridade']; ?></td>
                <td><?php echo $tarefa['concluido']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>