<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
     <?php
    $numero = $_REQUEST['number'];
    $inteiro = number_format(intval($numero), 2,',', ',');
    $fracionado = $numero-(int)$numero;
    $frac = number_format($fracionado, 3, ',', '.');
    echo "<br>";
    echo "Analisando o número <strong>$numero</strong> informado pelo usuário: <br>";
    echo "<li>A parte inteira do número é <strong>$inteiro</strong></li>";
    echo "<li>A parte fracionada do número é <strong>$frac</strong></li>";
    ?>  
    <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>  
</body>
</html>