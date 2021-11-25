<?php

    /*
        __set : Este método pode ser declarado em qualquer classe e será executado sempre 
        que for atribuído algum valor à propriedade do objeto.

        O método intercepta a atribuição de valores à propriedades de um objeto. 
        Porém, para que este método funcione, estas propriedades devem estar definidas 
        como protected ou private. 
        
        Digamos que o título e o texto das nossas notícias devam seguir um tamanho pré-definido. 
    */

class Noticia
{
    protected $titulo;
    public $texto;

    function __set($propriedade, $valor)
    {
        if (($propriedade == 'titulo') && (strlen($valor) > 10)) {
            echo "A propriedade <b>$propriedade</b> deve conter
                        no máximo 40 caracteres<p>";
        }
        if (($propriedade == 'texto' && strlen($valor) > 100)) {
            echo "A propriedade <b>$propriedade</b> deve conter
                        no máximo 100 caracteres<p>";
        }
    }

    function mostraNoticia()
    {
        echo "<center>";
        echo "<p><b>" . $this->titulo . "</b></p>";
        echo "<p>" . $this->texto;
        echo "</p></center>";
    }
}

$titulo = 'O curso termina nesta quarta-feira';
$texto = 'Um dos maiores cursos do país acaba nesta quarta-feira...';
$c_tit = strlen($titulo);

echo "Titulo: " . $c_tit . "<p>";
$c_txt = strlen($texto);
echo "Texto: " . $c_txt . "<p>";

$not = new Noticia();
$not->titulo = $titulo; // protected
$not->texto = $texto;
$not->mostraNoticia();

echo "<pre>";
print_r($not);
echo "</pre>";

?>