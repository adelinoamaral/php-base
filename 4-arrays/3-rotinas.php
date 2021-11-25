<?php

    include "lib/utils.php";

    // Considera a string com o separador : entre elementos
    $data = "foo:*:1023:1000::/home/foo:/bin/sh";

    // atribui cada elemento de um array a uma variável
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
    

    /*
        REMOVER VALORES DUPLICADOS DE UM ARRAY
        You can use the array_unique() function to remove the duplicate elements or vlaues form an array. 
        If the array contains the string keys, then this function will keep the 
        first key encountered for every value, and ignore all the subsequent keys.
    */
    $array = array("A1" => "moon", 
                   "star", 
                   "A2" => "moon", 
                   "star", 
                   "sky"
            );

    // Deleting the duplicate items
    $result = array_unique($array);
    // Observa a apresentação dos índices do array
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
    // returns the sequence of elements from the array array as specified 
    // by the offset and length parameters.
    $sliced = array_slice($color_array,1,3);

    foreach($sliced as $valor){
        echo $valor . "<br>";
    }

    echo "<br><br><br>";


    // -------------------------------------------------------------
    
    $color_array1 = array("Red","Blue","Green");
    $color_array2 = array("Yellow","Brown");
    
    // Transforma os 2 arrays num só array
    $colors = array_merge($color_array1,$color_array2);

    foreach($colors as $key => $valor){
        echo $key . " => " . $valor . "<br>";
    }

    // Outra forma de apresentação (debugging) personalizada
    echo "<br><br><br>";
    echo("<pre>");
    print_r($colors);
    echo("</pre>");

    
?>