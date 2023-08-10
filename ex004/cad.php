<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Resultado do Processamento</header>
    <main>
        <?php 
            //var_dump($_GET); $_Request Junção Get Post e Cookies
            $n = $_GET["nome"] ?? "sem nome";
            $sn = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$n $sn</strong>! Este é o meu site</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>