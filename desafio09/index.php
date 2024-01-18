<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmétricas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $val1 = $_GET['val1'] ?? 0;
        $val2 = $_GET['val2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;
    ?>
    <main>
        <h1>Média aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val1">1° Valor</label>
            <input type="number" name="val1" id="val1" value="<?=$val1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="val2">2° Valor</label>
            <input type="number" name="val2" id="val2" value="<?=$val2?>">
            <label for="peso1">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>

    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>

        <?php 
            echo "<p> Analisando os valores $val1 e $val2</p>";
            $mediaAritmetica = ($val1 + $val2) / 2;
            echo "<p>A <strong>Média aritmética Simples</strong> entre os valores é igual a ".number_format($mediaAritmetica ,2)."</p>";

            $mediaPonderada = ($val1 * $peso1 + $val2 * $peso2) / ($peso1 + $peso2);
            echo "<p>A <strong>Média aritmétrica Ponderada</strong> com o peso $peso1 e $peso2 é igual a ".number_format($mediaPonderada,2)."</p>";
        ?>
    </section>
    
</body>
</html>