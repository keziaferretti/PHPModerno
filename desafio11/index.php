<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuste Preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $precoProd = $_GET['preco'] ?? 0;
        $porcentagem = $_GET['porc'] ?? 0;
    ?>
    <main>
        <h1>
           Reajustandor de Preços
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$precoProd?>">
            <label for="porcentagem">Qual será o percentual de ajuste? </label>
            <input type="range" name="porc" id="porc" value="<?=$porcentagem?>">
        <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
        $valorPercentual = $precoProd * ($porcentagem / 100);
        $valorAjustado = $precoProd + $valorPercentual;
        echo "O produto que custava $precoProd, com o aumento de $porcentagem% vai custar R$ $valorAjustado"
        
        ?>

    </section>
</body>
</html>