<?php

// nome e caminho do ficheiro
$file = "data.txt";

/**
 * readfile() - lê e visualiza todo o conteúdo do ficheiro sem o abrir.
 * file_get_contents() - lê todo o conteúdo do ficheiro sem o abrir.
 * file() - devolve um array com as várias linhas do ficheiro e não o conteúdo numa só linha.
 */
// Verifica se o ficheiro existe
if(file_exists($file)){
    // Lê e visualiza o conteúdo do ficheiro
    readfile($file) or die("ERROR: Não pode abrir o ficheiro.");

    echo "<br><br>";

    $conteudo = file_get_contents($file) or die("ERROR: Não pode abrir o ficheiro.");
    echo $conteudo;

    echo "<br><br>";

    // Lê cada linha do ficheiro como sendo um array
    $arr = file($file) or die("ERROR: Não pode abrir o ficheiro.");
    foreach($arr as $line){
        echo $line . "<br>";
    }

} else{
    echo "ERROR: O ficheiro não existe.";
}
?>