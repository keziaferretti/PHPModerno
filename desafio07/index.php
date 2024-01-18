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
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>
           Informe seu salário
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$valor1?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.320,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            if ($salario < 1320) {
                echo "<p>Seu salário é menor que o salário mínimo</p>";
            } else {
                $divisao = $salario / 1320;
                $resto = ($salario % 1320) * 100 / 1320;

                // Formata o valor de $divisao com uma casa decimal
                $divisaoFormatada = number_format($divisao, 1);

                // Formata o valor de $resto com uma casa decimal
                $restoFormatado = number_format($resto, 1);

                echo "<p>Seu salário é <strong>$salario</strong> e equivale a <strong>$divisaoFormatada</strong> salários mínimos $restoFormatado</p>";
            }

        ?>
    </section>
</body>
</html>