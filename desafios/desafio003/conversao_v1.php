<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas v1.0</title>
</head>
<body>
    <main> 
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $numero = $_GET["numero"];
            $troca = str_replace(',', '.', str_replace('.','',$numero));
            $cotacao_atual = 05.18;
            $conversor = number_format($troca / $cotacao_atual, 2, ',', '.');

            echo "Seus R$ $numero reais é equivalente a <strong>US$ $conversor</strong><p>";
            echo "<strong>*Cotação fixa de R$5,18</strong> informada diretamente no código<br>"
            ?>
            <br>
            <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>