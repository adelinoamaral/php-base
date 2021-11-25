<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Funções</title>
</head>
<body>
<?php
	
    include 'libs/cor.php';
    include 'libs/util.php';

    $color_code = getRGB();
    echo $color_code . "<br>";
    $color_code = getRGB(BLUE);
    echo $color_code . "<br>";

    echo "--------------------------------------------------------<br>";
    
    $x = 1;
    $num = contador($x);
    $num = contador($x);
    $num = contador($x);
    customFont("Arial", 2, $color_code, $num);
    
    echo "--------------------------------------------------------<br>";
    
    $y = 5;
    echo $y . "<br>"; // Outputs: 5

    // o parâmetro $y é passado por referência, o valor de $y sai alterado.
    // verifica o cabeçalho da função.
    selfMultiply($y);
    echo $y . "<br>"; // Outputs: 25

    echo "--------------------------------------------------------<br>";

    list($indice, $nome, $peso) = mostraLista();
    echo "$indice - $nome e tenho $peso Kg<br>";
    
    echo "--------------------------------------------------------<br>";
    
    Mostra('João', 'Maria', 'José', 'Pedro');
    
?>
</body>
</html>
