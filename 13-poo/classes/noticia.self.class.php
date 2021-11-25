<?php

class Noticia
{
    public $titulo;
    public $texto;

    const AUTOR = "Rodrigo";

    function setTitulo($valor)
    {
        $this->titulo = $valor;
    }

    function setTexto($valor)
    {
        $this->texto = $valor;
    }

    function mostraNoticia()
    {
        echo "<center>";
        echo "<b>" . $this->titulo . "</b><p>";
        echo $this->texto . " - ";
        echo self::AUTOR;
        echo "</center><p>";
    }
}


class UltimaHora extends Noticia{
    const AUTOR = "Carvalho";

    function mostraNoticia()
    {
        echo "<center>";
        echo "<b>" . $this->titulo . "</b><p>";
        echo $this->texto . " - ";
        echo self::AUTOR;   // vai mostrar o valor Carvalho e não Rodrigo (scope)
        // parent::AUTOR - vai mostrar o valor Rodrigo
        echo " -> " . parent::AUTOR ."</center><p>";
    }
}

?>

