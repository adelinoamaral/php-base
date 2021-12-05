<?php

    /*
        Uma Classe abstrata é constituída por uma implementação parcial a partir
        das quais outras classes podem crescer.

        Quando uma classe é declarada como abstrata, significa que ela tem métodos
        incompletos que, obrigatoriamente têm que ser implementados nas classes que a herdam.

        Classes abstratas são classes que não podem ser instânciadas diretamente, 
        sendo necessária a criação de uma sub-classe para conseguir utilizar as 
        suas características. 
        Isso não quer dizer que os métodos destas classes também precisem ser abstratos, 
        é opcional. Já as propriedades não podem ser definidas como abstratas.

        Os métodos abstratos fornecem uma assinatura (nome da função e parâmetros) que 
        uma classe extende quando implementada

        Conceito de polimorfismo - a possibilidade de dois ou mais objetos 
        executarem a mesma ação. 
        Um exemplo prático seria uma moto e um carro, os dois têm as ações 
        em comum, como travar e Acelerar; na POO usamos classes abstratas 
        para implmentar funcionalidades iguais em diferentes objetos.

        Vamos transformar a classe Noticia numa classe abstrata. Depois temos que
        herdar as suas características na subclasse NoticiaPrincipal.

        Os métodos abstratos não devem conter código, apenas definição. 
        Quando criamos um método abstrato, fazemos com que seja implementado 
        em todas as classes que herdarem dessa classe abstrata.
    */

    abstract class Noticia
    {
        // as propriedades não podem ser abstract
        protected $titulo;
        protected $texto;
        
        public function setTitulo($valor)
        {
            $this->titulo = $valor;
        }

        abstract public function setTexto($valor);
        abstract public function mostraNoticia();
    }


    // Não posso escrever a seguinte instrução porque a classe é abstrata
    //$not = new Noticia();

    // A classe abstrata Noticia serve como modelo para a classe NoticiaTop
    // ou outra qualquer. Cada uma implementa os métodos abstratos de acordo
    // com as suas regras de negócio.

    class NoticiaTopo extends Noticia{
        // Somos obrigado a implementar os métodos 
        // setText() e mostraNoticia() porque são abstract
        public function setTexto($valor)
        {
            return $this->texto = $valor;
        }

        public function mostraNoticia()
        {
            echo "$this->titulo - $this->texto";
        }
    }

    // $nt = new NoticiaTopo();
    // $nt->setTitulo("CORONA");
    // $nt->setTexto("Mau como o diabo");
    // $nt->mostraNoticia();
    
?>