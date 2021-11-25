<?php

    include_once('classes/noticia_final.class.php');

    // Este código gera o seguinte ERRO
    // Fatal error: Class NoticiaPrincipal may not inherit from final class (Noticia) 

    class NoticiaPrincipal extends NoticiaTopo
    {
        private $imagem;

        function setImagem($valor)
        {
            $this->imagem = $valor;
        }

        // dá erro porque estamos a tentar reescrever um método que foi
        // definido como "final" na class parent.
        function mostraNoticia()
        {
            echo "<center>";
            echo "<img src=\"" . $this->imagem . "\"><p>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</center><p>";
        }
    }
    
    $titulo = 'Campus recebe 500 novas árvores';
    $texto = 'O Plantio realiza-se entre 2018 e 2020,';
    $texto .= ' integrado no programa ambiental em Portugal';
    $imagem = 'heranca.jpeg';
    
    $not = new NoticiaPrincipal();
    $not->setTitulo($titulo);
    $not->setTexto($texto);
    $not->setImagem($imagem);
    $not->mostraNoticia();
    
    echo "<pre>";
    print_r($not);
    echo "</pre>";
?>