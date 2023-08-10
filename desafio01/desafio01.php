<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $numero = $_GET["numero"] ?? 0;    
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "<p>O número escolhido foi <strong>$numero</strong></p>";
                echo "<p>O <em>antecessor</em> de $numero é $antecessor</p>";
                echo "<p>O <em>sucessor</em> de $numero é $sucessor</p>";

            ?>
        </p>
        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>