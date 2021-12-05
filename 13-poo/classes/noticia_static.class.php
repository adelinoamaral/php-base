<?php

    /*
        Quando definimos métodos ou propriedades como estáticos(static), 
        permitimos que estes possam ser chamados externamente sem haver a 
        necessidade de estarem no contexto de um objeto, isto é, não é 
        necessário instanciar uma classe para poder acessar aos métodos.

        Para ter acesso a uma propriedade estática dentro do corpo de uma classe 
        temos que usar a palavra self::

        Propriedades e métodos estáticas podem ser acessados ​​usando o 
        operador de resolução de escopo (::), assim: 
        ClassName::$property ou ClassName::method().

        Quando utilizamos o modificador static nos atributos, em vez de serem 
        alocados n atributos para n objetos, é alocado apenas 1 atributo 
        para n objetos, onde todos os objetos têm acesso ao mesmo atributo.

        Uma propriedade declarada como estática não pode ser acessada por 
        meio do objeto dessa classe.

        O símbolo :: permite acesso a métodos ou propriedades estáticas, constantes,
        e sobrecarregadas de uma classe.
        Ao referenciar estes itens fora da definição da classe, use o nome da classe.

        Existem três palavras-chave especiais que são utilizadas para aceder a 
        propriedades e métodos dentro da definição de uma classe: self, parent e static.

        Quando uma subclasse sobrecarrega a definição de um método do pai, o PHP não chama
        o método pai. Fica a cargo da subclasse chamar ou não o método pai. 
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