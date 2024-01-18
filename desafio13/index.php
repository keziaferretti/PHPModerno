<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletronico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valorSaque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>
        Caixa Eletrônico
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="saque" id="saque" value="<?=$valorSaque?>">
        <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <?php 
            echo "<h2>Saque de R$$valorSaque realizado</h2>";
            echo "<p>O Caixa eletrônico vai te entregar as seguintes notas:</p>";
            $notas = [100, 50, 20, 10, 5];

            foreach($notas as $nota){
                $quantidadeNotas = $valorSaque / $nota;
                $valorSaque = $valorSaque % $nota;
                echo "<p>R$$nota x $quantidadeNotas nota </p>";
            }
        ?>
        
    </section>
</body>
</html>