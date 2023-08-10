<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução Analisador de numero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_REQUEST["n"] ?? 0;

            echo"<p>Analisando o numero <strong>". number_format($num, 3, ",",".") ."</strong> informado pelo usuario</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo"<ul><li>A parte inteira do número é <strong>".number_format($int, 0,",",".")."</strong></li>";

            echo"<li>A parte fracionária do número é <strong>".number_format($fra,3,",",".")."</strong></li></ul> "

        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>

    
    
</body>
</html>