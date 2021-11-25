<?php

    class Noticia
    {
        public $titulo;
        public $texto;

        function mostraNoticia()
        {
            echo "<center>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</center></p>";
        }

        function __clone()
        {
            echo "<p>Obj. com o título <b>" . $this->titulo . "</b> Clonado</p>";
        }
    }


    $not = new Noticia();
    $not->titulo = "Navarro 6ª edição";
    $not->texto = "Um novo formato, um jornal jovem!";
    $not->mostraNoticia();

 
    echo "<center><b>================================================</b></center>";
    
    // chama o método __clone
    $not2 = clone $not;
    $not2->titulo = "Economia debate finanças mundiais e estratégias";
    $not2->texto = "Começa hoje, no auditório da ESEN..";
    $not2->mostraNoticia();
     
    echo "<center><b>===============================================</b></center>";
    $not->mostraNoticia();

    echo "<pre>";
    print_r($not);
    echo "</pre><p>";
    
    echo "<pre>";
    print_r($not2);
    echo "</pre><p>";

    echo "<center><b>==================== REFERENCE ===========================</b></center>";
    // $not3 faz referência ao objeto $not
    $not3 = $not;
    $not3->titulo = "Economia em Viseu";
    $not3->texto = "No auditório da ESEN..";
    $not3->mostraNoticia();
    echo "<br>";
    $not->mostraNoticia();

?>