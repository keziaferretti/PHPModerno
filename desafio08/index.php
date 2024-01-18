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
        $valor1 = $_GET['num'] ?? 0;


    ?>
    <main>
        <h1>
           Informe um número
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="num" id="num" value="<?=$valor1?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            echo "<p>Analisando o número <strong>$valor1</strong>, temos:</>";
            $raizQuadrada = sqrt($valor1);
            $raizCubica = pow($valor1, 1/3);
            echo "<p>A raiz quadrada é <strong>".number_format($raizQuadrada, 3)."</strong></p>";
            echo "<p>A raiz cúbicade é <strong>$valor1</strong> é <strong>".number_format($raizCubica, 3)."</strong></p>"
        ?>

    </section>
</body>
</html>