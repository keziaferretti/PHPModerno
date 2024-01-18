<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //capturando os dados formularios retroalimentado
        $valor1 = $_GET['dividendo'] ?? 0;
        $valor2 = $_GET['divisor'] ?? 0;

    ?>
    <main>
        <h1>
           Anatomia de uma Divisão
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$valor2?>">
            <input type="submit" value="analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $divisao = $valor1 / $valor2;
            $resto = $valor1 % $valor2;
            echo "<p>$valor1 / $valor2 = $divisao</p>";
            echo "<p>Resto da divisão $valor1 % $valor2 = $resto</p>";
        ?>
    </section>
</body>
</html>