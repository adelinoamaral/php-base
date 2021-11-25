<?php

    /*
        Quando definimos métodos ou propriedades como estáticos(static), 
        permitimos que estes possam ser chamados externamente sem haver a 
        necessidade de estarem no contexto de um objeto, isto é, não é 
        necessário instanciar uma classe para poder acessar aos métodos. 
        Para ter acesso a uma propriedade estática dentro do corpo da classe 
        temos que usar a palavra self::

        Propriedades e métodos estáticas podem ser acessados ​​usando o 
        operador de resolução de escopo (::), assim: 
        ClassName::$propertye ou ClassName::method().

        Quando utilizamos o modificador static nos atributos, ao invés de serem 
        alocados n atributos para n objetos, é alocado apenas 1 atributo 
        para n objetos, onde todos os objetos têm acesso ao mesmo atributo.

        Uma propriedade declarada como estática não pode ser acessada por 
        meio do objeto dessa classe. 
    */
    class Noticia
    {
        // atributo static
        public static $nome_jornal = 'O Navarro';

        protected $titulo;
        protected $texto;
        const EMPRESA = "ESEN";

        function setTitulo($valor)
        {
            $this->titulo = $valor;
        }

        function setTexto($valor)
        {
            $this->texto = $valor;
        }

        public function mostraNoticia()
        {
            echo "<center>";
            echo "Nome do Jornal: <b>" . self::$nome_jornal . "</b><p>";
            echo "<b>" . $this->titulo . "</b></p>";
            echo $this->texto;
            echo "</center>";
        }

        // método static
        public static function MostraTituloJornal()
        {
            echo "<center>";
            echo "Nome do Jornal: <b>" . self::$nome_jornal . "</b><p>";
            // métodos static não têm acesso aos atributos normais da classe
            // O $this é utilizado quando se instância uma classe
            // echo $this->texto;
            echo "</center>";
        }
    }

?>