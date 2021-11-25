<?php
$file = "historia.txt";

/**
 * fwrite() - escreve dados num ficheiro ou acrescenta dados num ficheiro existente.
 */
    
// String of data to be written
$data = "Qual a minha linguagem de programação preferida para Desktop?\nLinguagem C.";
    
// Abre o ficheiro para escrita, a pasta deve ter permissões de escrita.
// w - cria um novo ficheiro não permitindo acrescentar no ficheiro.
$handle = fopen($file, "w") or die("ERROR: Não pode abrir o ficheiro.");
    
// Escreve os dados no ficheiro
fwrite($handle, $data) or die ("ERROR: Não pode abrir o ficheiro.");
    
// Fecha o ficheiro
fclose($handle);
    
echo "Os dados foram escritos com sucesso.";

// ##############################################################################

echo "<br><br>";

$data = "Qual a minha linguagem de programação preferida para a Web?\nLinguagem PHP.";
    
// Escreve dados num ficheiro sem executar a operação de abrir.
// Apaga sempre os dados existente no ficheiro.
// file_put_contents($file, $data) or die("ERROR: Não pode abrir o ficheiro.");

// NOTA
// se desejar preservar os dados existentes no ficheiro deve acrescentar o parâmetro FILE_APPEND
file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Não pode abrir o ficheiro.");

echo "Os dados foram escritos com sucesso.";


?>