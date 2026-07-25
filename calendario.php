<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia <?php echo date('d'); ?></title>
</head>

<body>

    <!-- FUNÇÕES DEFINIDAS -->

    <?php
    // FUNÇÃO PARA INSERIR NOVA LINHA 
    function linha($semana)
    {
        $today = date('d');
        echo "<tr>";
        for ($i = 0; $i <= 6; $i++) {
            if (isset($semana[$i])) {
                if ($semana[$i] == $today) {
                    echo "<td>" . aplicar_negrito($today) . "</td>";
                } elseif ($i == 0 || $i == 6) {
                    echo "<td>" . destacar_fim_de_semana($semana[$i]) . "</td>";
                } else {
                    echo "<td>{$semana[$i]}</td>";
                }
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }

    // FUNÇÃO PARA DESENHAR O CALENDÁRIO
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

    // EXIBE A SAUDAÇÃO EM FUNÇÃO DO HORÁRIO DO DIA
    function saudacao_em_funcao_da_hora(int $hora)
    {
        if ($hora < 12) {
            return "Bom dia !";
        } elseif ($hora < 18) {
            return "Boa tarde !";
        } else {
            return "Boa noite !";
        }
    }

    // FUNÇÃO PARA APLICAR NEGRITO À DATA ATUAL
    function aplicar_negrito(int $dia)
    {
        return "<strong style='color:orange'>" . $dia . "</strong>";
    }

    // FUNÇÃO PARA DESTACAR SÁBADOS E DOMINGOS
    function destacar_fim_de_semana(int $dia)
    {
        return "<span style='color: red; font-weight: bold;'>" . $dia . "</span>";
    }
    ?>

    <h1><?php echo "Revisão HTML e PHP"; ?></h1>
    <h1>Estamos em <?php echo date('Y'); ?></h1>
    <p>
        <?php echo saudacao_em_funcao_da_hora(date('H')); ?>
        Agora são <?php echo date('H'); ?> horas e <?php echo date('i'); ?> minutos.
    </p>

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