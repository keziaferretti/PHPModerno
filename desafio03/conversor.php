<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p>
        <?php 
            $real = $_GET["valor"] ?? 0;

            $dolar = 4.90;
            $cotacaoDolar = $real / $dolar;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $cotacaoDolar, "USD") ."<br><br>";

            echo "*<strong>Cotação fixa de ". numfmt_format_currency($padrao, $dolar, "BRL") ." </strong>informadas diretamento no código";
        ?>
        </p>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
