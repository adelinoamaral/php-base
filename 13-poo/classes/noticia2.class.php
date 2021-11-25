<?php
class Noticia
{
    public $titulo;
    public $texto;


    function __construct($valor_tit, $valor_txt)
    {
        // A __CLASS__é uma constante mágica que contém o nome da classe na qual ela ocorre. 
        echo '<h1>A classe "' . __CLASS__ . '" foi inicializada!</h1>';
        $this->titulo = $valor_tit;
        $this->texto = $valor_txt;
    }

   /*
        Da mesma forma, o método mágico __destruct() (conhecido como destruidor ) 
        é executado automaticamente quando o objeto é destruído ou quando o script termina.
        Um método/função destrutor limpa todos os recursos alocados ao objeto depois 
        da sua destruição. 
    */
    function __destruct()
    {
        echo '<h1>A classe "' . __CLASS__ . '" foi destruída.</h1>';
    }

    // permite alterar a propriedade título
    function setTitulo($valor)
    {
        $this->titulo = $valor;
    }

    // permite alterar a propriedade texto
    function setTexto($valor)
    {
        $this->texto = $valor;
    }

    // permite mostrar os detalhes da notícia
    function mostraNoticia()
    {
        echo "<center>";
        echo "<b>" . $this->titulo . "</b><p>";
        echo $this->texto;
        echo "</center><p>";
    }
}

?>

