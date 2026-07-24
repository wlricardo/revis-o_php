<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia <?php echo date('d'); ?></title>
</head>

<body>
    <h1><?php echo "Título dentro do H1 <br>"; ?></h1>
    <h1>Estamos em <?php echo date('Y'); ?></h1>
    <p>
        Agora são <?php echo date('H'); ?> horas e <?php echo date('i'); ?> minutos.
    </p>

    <!-- FUNÇÕES DEFINIDAS -->

    <?php
    // FUNÇÃO PARA INSERIR NOVA LINHA 
    function linha($semana)
    {
        echo "<tr>";
        for ($i = 0; $i <= 6; $i++) {
            if (isset($semana[$i])) {
                echo "<td>{$semana[$i]}</td>";
            } else {
                echo "<tr></tr>";
            }
        }
        echo "</tr>";
    }

    // FUNÇÃO PARA DESENHA O CALENDÁRIO
    function calendario()
    {
        $dia = 1;
        $semana = array();      // Cria uma array vazia
        while ($dia <= 31) {
            array_push($semana, $dia);  // Insere o valor de 'dia' à array 'semana'
            if (count($semana) == 7) {
                linha($semana);         // A cada sete dias, acrescenta uma linha
                $semana = array();
            }
            $dia += 1;
        }
        linha($semana);
    }
    ?>

    <table border="1">
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sáb</th>
        </tr>
        <?php calendario() ?>
    </table>

</body>

</html>