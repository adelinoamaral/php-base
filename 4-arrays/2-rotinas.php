<?php

    include "lib/utils.php";

    /**
     * O presente ficheiro disponibiliza pequenos exemplos que
     * permitem explicar o tratamento de arrays
     */

    // Considera a string com o separador : entre elementos
    $data = "foo:*:1023:1000::/home/foo:/bin/sh";

    // atribui cada elemento de um array a uma variável individual
    list($user, $pass, $uid, $gid, $gecos, $home, $shell) = divideFaixa($data);

    echo "Username: " . $user . "<br>"; // foo
    echo "Password: " . $pass . "<br>"; // *


    // -------------------------------------------------------------

    // passar um array como parâmetro
    function showMonth($month){
        foreach($month as $indice => $valor)
            echo $indice . ' > ' . $valor . '<br>';

        //print_r($month);
    }

    showMonth($meses);


    // -------------------------------------------------------------
    
    // um format de array muito utilizado nas frameworks codeigniter e laravel
    $result = [
                "name" => "Adelino", 
                "age" => "16", 
                "lastname" => "Amaral"
            ];

    foreach($result as $key => $value)
    {
        echo $key . " - " . $value . "<br>";
    }
        
    echo "<br><br><br>";

    // -------------------------------------------------------------

    /*
        REMOVER OU FILTRAR VALORES FALSOS E VAZIOS DE UM ARRAY

        You can use the PHP array_filter() function to remove or filter empty or false 
        values from an array. This function typically filters the values of an array 
        using a callback function, however if no callback function is specified, 
        all the values of the array which are equal to FALSE will be removed, 
        such as an empty string or a NULL value.
    */
    $array = array("apple", "", 2, null, -5, "orange", 10, false, "");

    // Filtering the array
    $result2 = array_filter($array);  

    foreach($result2 as $key => $value)
    {
        echo $key . " -> " . $value . "<br>";
    }

    echo "<br><br><br>";


// -------------------------------------------------------------

    $color_array = array("Red","Blue","Green","Yellow","Brown");
    // returns the sequence of elements from the array as specified 
    // by the offset and length parameters.
    $sliced = array_slice($color_array,1,3);

    foreach($sliced as $valor){
        echo $valor . "<br>";
    }

// -------------------------------------------------------------

    // cria um array
    $arr = array(1,2,3,6,4,8,9);

    // percorre o array. É utilizada uma referência específica (&) onde os valores
    // do array são alterados.
    foreach ($arr as $valor) {
        // altera o valor refereciado por & associado à variável $valor
      $valor = $valor * 2;
    }
    
    // mostra o valor do array
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>