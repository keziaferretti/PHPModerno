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
        <h1>Conversor de Moedas v2.0</h1>
        <p>
        <?php 
            $real = $_GET["valor"] ?? 0;
            
            $inicio = date("m-d-Y", strtotime("-7 days")); //pega 7 dias antes 
            $fim    = date('m-d-Y'); // pega o dia

            //os dias são com as variaveis de inicio e fim
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") ."<br><br>";

            echo "*<strong>Cotação vindo da API, valor cotação ". numfmt_format_currency($padrao, $cotacao, "BRL") ." </strong>";
        ?>
        </p>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
