<?php

/*
__get : Este método pode ser declarado em qualquer classe e será executado 
toda vez que for solicitado o retorno do valor de alguma propriedade de um objeto. 
Como em __set(), este método funciona apenas com as propriedades que 
estiverem definidas como protected ou private.

*/
class Noticia
{
    private $dados = array();

    public function __set($titulo, $texto)
    {
        $this->dados[$titulo] = $texto;
    }

    public function __get($titulo)
    {
        return $this->dados[$titulo];
    }

    public function __toString()
    {
        return "<p>Classe <b>Noticia</b></p>";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
    
}


$not = new Noticia();
$not->titulo = "Jornal";
$not->info = "BláBláBláBlá";
$not->edicao = "2ª";

echo $not->titulo . "<br>";
echo $not->info . "<br>";
echo $not->edicao . "<br>";

// manda executar o método __toString
echo $not;

// executa o objeto como função, chama o método invoke
echo $not();
?>