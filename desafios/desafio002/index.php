<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Conversor de Moedas v1.0</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números Aleatórios</h1>
    </header>
    <section>
        <form >
        <?php
            
            $sorteado = rand(0,100);
            echo "Gerando números aleatórios entre 0 e 100..";
            echo "<br>O valor gerado foi!<strong>$sorteado</strong></br>";
        ?>
         <input type="submit" value="Gerar outro">
        </form>
    </section>
</body>
</html>