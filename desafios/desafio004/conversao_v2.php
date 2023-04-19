<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas v2.0</title>
</head>
<body>
    <main> 
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $valor = $_GET['dinheiro'];
            $url = file_get_contents("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='04-13-2023'&@dataFinalCotacao='04-30-2023'&top=100&format=text/html&select=cotacaoCompra");
            $valor_da_cotacao = json_decode($url, true);
            $valor_compra = $valor_da_cotacao['value'][0]['cotacaoCompra'];
            $cotacao = number_format($valor / $valor_compra, 2, ',', '.');
            echo "Você tem <strong>R$ $valor</strong> e na conversão tens <strong>USD $cotacao</strong> <br>";
            $tes = number_format($valor_compra, 2, ',', '.');
            echo $tes;
            ?>
            <br>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>