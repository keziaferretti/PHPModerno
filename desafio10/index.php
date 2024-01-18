<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano = $_GET['ano'] ?? 0;
        $data = $_GET['data'] ?? 0;
    ?>
    <main>
        <h1>
           Calculando a sua idade
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">

            <label for="anoAtual">Quer saber sua idade em que ano?(atualmente estamos em 2023)</label>
            <input type="number" name="data" id="data" value="<?=$data?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $data - $ano;
            echo "<p>Quem nasceu em $ano vai ter <strong>$idade anos</strong> em  $data!</p>";

        ?>

    </section>
</body>
</html>