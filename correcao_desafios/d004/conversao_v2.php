<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Conversor de Moedas v2.0</title>
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php

        // COTAÇÃO VINDA DA API DO BANCO CENTRAL
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
        //TRATA A URL PARA JSON 
        $dados = json_decode(file_get_contents($url), true);

        //MOSTRA O TIPO DA VARIAVEL
        //var_dump($dados);
        
        //PEGANDO A COTACAO NO ARRAY
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        // QUANTO $$ VOCÊ TEM?
        $real = $_REQUEST['din'] ?? 0;

        // EQUIVALÊNCIA EM DÓLAR
        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo " <p> Seus " . numfmt_format_currency($padrao, $real, "BRL") . " 
        equivalem a <strong> " . numfmt_format_currency($padrao, $dolar, "USD") . " </strong></p";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
<html>