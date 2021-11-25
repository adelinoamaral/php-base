<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Cria um Array</title>
</head>

<body>
<?php
    // cria um array
    $arr = array(1,2,3,6,4,8,9);

    // percorre o array. É utilizada uma referência específica (&) onde os valores
    // do array são alterados.
    foreach ($arr as &$valor) {
        // altera o valor refereciado por & associado à variável $valor
      $valor = $valor * 2;
    }
    
    // mostra o valor do array
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>
</body>
</html>
