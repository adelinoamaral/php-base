<?php

class Noticia
{
    public $titulo;
    public $texto;
    
     // Define o método setTitulo que recebe um parâmetro
    function setTitulo($valor)
    {
        $this->titulo = $valor;
    }

    // define o método setTexto que recebe um parâmetro $valor
    function setTexto($valor)
    {
        // Observe que esta função/método não devolveu nenhum valor
        // no entanto, o valor do parâmetro $valor ficou guardado na
        // propriedade texto.
        $this->texto = $valor;
    }

    // define o método mostraNoticia que não recebe parâmetros
    function mostraNoticia()
    {
        echo "<center>";
        echo "<b>" . $this->titulo . "</b><p>";
        echo $this->texto;
        echo "</center><p>";
    }
}

?>

