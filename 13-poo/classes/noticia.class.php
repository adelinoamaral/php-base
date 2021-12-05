<?php

/**
 * A classe Noticia possui as propriedades públicas $titulo e $texto
 * e os métodos setTitulo(), setTexto(), mostraNoticia()
 */
class Noticia
{
    public $titulo;
    public $texto;
    
     // Define o método setTitulo que recebe um parâmetro
    function setTitulo($valor)
    {
        // A pseudo-variável $this fica disponível quando um método 
        // é chamado a partir do contexto de um objeto. 
        // $this é o valor do objeto chamado.
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

