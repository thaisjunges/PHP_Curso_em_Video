<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Interação com Formulários</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            echo "<p>O número digitado é:  <strong>$numero</strong>!";

            $antecessor = $numero - 1;
            echo "<p>O número sucessor é: <strong>$antecessor</strong>";

            $sucessor = $numero + 1;
            echo "<p>O número antecessor é: <strong>$sucessor</strong>";
        ?>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>