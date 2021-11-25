<?php
$file = "file.txt";
 
if(file_exists($file))
{

    // Attempt to rename the file
    if(rename($file, "newfile.txt"))
    {
        echo "O nome do ficheiro foi alterado com sucesso.<br>";

        if(unlink($file))
        {
            echo "O ficheiro foi eliminado com sucesso.";
        } else{
            echo "ERROR: O ficheiro não foi removido.";
        }
        
    } else{
        echo "ERROR: Não pode mudar o nome ao ficheiro.";
    }
} else{
    echo "ERROR: O ficheiro não existe.";
}
?>
