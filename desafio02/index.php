<!DOCTYPE html>
<html>
<head>
    <title>Número Aleatório Gerado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php
            //rand()
            //mt_rand()
            //random_int() criptograficamente seguro
                $numeroAleatorio = mt_rand(0, 100);
                echo "<p>Gerando um número aleatório entre 0 e 100</p>";
                echo "<p>O valor aleatório gerado foi $numeroAleatorio</p>";
            ?>
            
            <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
            
            
        </p>
    </main>
</body>
</html>
