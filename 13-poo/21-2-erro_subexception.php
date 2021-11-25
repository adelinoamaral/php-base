<?php
function Abrir($file = null)
{
    if (!$file)
    {
        throw new ParameterException('Falta o par�metro com o nome do arquivo');
    }
    if (!file_exists($file))
    {
        throw new FileNotFoundException('Arquivo n�o existente');
    }
    if (!$retorno = @file_get_contents($file))
    {
        throw new FilePermissionException('Imposs�vel ler o arquivo');
    }
    return $retorno;
}

// definição das subclasses de erro
class ParameterException extends Exception
{
}
class FileNotFoundException extends Exception
{
}
class FilePermissionException extends Exception
{
}


// tratamento de exceções
try
{
    $arquivo = Abrir('/tmp/arquivo.dat');
    echo $arquivo;
}catch (ParameterException $excecao) // captura o erro
{
    // não faz nada...
}catch (FileNotFoundException $excecao)
{
    var_dump($excecao->getTrace());
    echo "finalizando aplica��o...\n";
    die;
}catch (FilePermissionException $excecao)
{
    echo $excecao->getFile() . ' : ' . $excecao->getLine() . ' # ' . $excecao->getMessage();
}
?>