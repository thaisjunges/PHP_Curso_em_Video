<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes primitivos PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        //$num = 010;
        //echo "O valor da variável é $num";
        
        $v = "Thais";
        var_dump($v);

        $num = (integer) 3e2; // 3 x 10(2) coerção
        echo "O valor é $num";
        var_dump($num);

        //"950" é uma string e fazemos a COERÇÃO para FLOAT
        $num = (float) "950";
        var_dump($num);

        $casada = true;
        var_dump($casada);
        print "O valor para casada é $casada";
    ?>
</body>
</html>