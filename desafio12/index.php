<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $calTempo = $_GET['tempo'] ?? 0;
    ?>
    <main>
        <h1>
        Calculadora de Tempo
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?=$calTempo?>">
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
            echo "<p>Analisando o valor que você digitou, <strong>$calTempo segundos</strong> equivalem a um total de:</p>";
            echo "<ul>
                <li>".floor($calTempo / 604800)." semanas</li>
                <li>".floor($calTempo / 86400)." dias</li>
                <li>".floor($calTempo / 3600)." horas</li>
                <li>".floor($calTempo / 60)." minutos</li>
                <li>".floor($calTempo % 60)." segundo</li>

                </ul>";
        ?>


    </section>
</body>
</html>