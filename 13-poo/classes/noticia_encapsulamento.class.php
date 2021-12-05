<?php
    /*
        O encapsulamento possibilita ao programador restringir ou libertar o acesso às 
        propriedades e aos métodos das classes.

        Aplica-se este conceito através dos operadores:
        Public : uma propriedade ou método public permitem o acesso direto às suas 
        informações em qualquer script, a qualquer momento. 
        
        Protected : uma propriedade ou método do tipo protected são acessíveis pela 
        própria classe ou pelos herdeiros, sendo impossível realizar o acesso externo.

        Private : propriedades e métodos do tipo private, só a própria classe tem acesso, 
        sendo ambos invisíveis aos herdeiros ou por classes e programas externos.
    */

    class Noticia
    {
        protected $titulo;
        protected $texto;

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
            echo $this->texto;
            echo "</center><p>";
        }
    }


    // a nova classe permite a inserção de uma imagem na notícia
    class NoticiaPrincipal extends Noticia
    {
        private $imagem; // acessível apenas dentro desta classe

        // atualização do caminho da imagem
        // Para alterar o valor da propriedade $imagem fora da classe, 
        // a partir do objeto, vamos que utilizar um método.
        // Por convenção, para modificat valores o método começa por set
        public function setImagem($valor)
        {
            $this->imagem = $valor;
        }

        // o mesmo racicocínio para obter o valor da propriedade
        public function getImagem()
        {
            return $this->imagem;
        }

        // reescreve o método da classe pai|base
        public function mostraNoticia()
        {
            echo "<center>";
            // os atributos titulo e texto são protected na classe base
            echo "<img src=\"". $this->imagem ."\"><p>";
            echo "<b>". $this->titulo ."</b><p>";
            echo  $this->texto;
            echo "</center><p>";
        }
    }
?>