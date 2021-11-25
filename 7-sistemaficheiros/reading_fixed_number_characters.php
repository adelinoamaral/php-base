<?php

    /**
     * O PHP tem várias funções de leitura de dados. Vamos apresentar algumas.
     * fread() - lê um número específico de caracters de um ficheiro.
     * fread(file_handle, length in bytes)
     */

// nome do ficheiro que contém os dados
$file = "data.txt";
 
// Verifica se o ficheiro existe
if(file_exists($file)){
    // Abre o ficheiro para leitura
    $handle = fopen($file, "r") or die("ERROR: Não pode abrir o ficheiro.");
        
    // Lê 29 bytes do ficheiro (cada caracter ocupa 1 byte)
    $content = fread($handle, "29");
        
    // Fecha o ficheiro (file handle)
    fclose($handle);
        
    // Mostra o conteúdo
    echo $content;
} else{
    echo "ERROR: O ficheiro não existe.";
}
?>