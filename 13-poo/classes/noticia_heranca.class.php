<?php
// importa a classe Noticia definida no ficheiro noticia2.class.php
include_once('classes/noticia2.class.php');

/*
      Uma classe pode herdar as propriedades e os métodos de outra classe 
      usando a palavra-chave "extends". 
      Este processo de extensibilidade é chamado de herança. Provavelmente 
      a razão mais poderosa por trás do uso do modelo de POO.

      Herança é uma forma de reutilização de código nas novas classes a 
      partir de classes existentes, adquirindo os seus atributos e comportamentos,
      e complementando-os com novos requisitos.

      Uma classe "filha" é derivada de uma classe "pai", também é referida como 
      uma classe "derivada" e o seu pai é chamado de classe "base".
*/

// classe filha; NoticiaPrincipal
// classe pai|base: Noticia
class NoticiaPrincipal extends Noticia 
{
      public $imagem;

      /*
            O método construtor da classe Noticia é herdado e executado automaticamente 
            na subclasse NoticiaPrincipal. 
            Porém, as características específicas de NoticiaPrincipal não serão inicializadas 
            pelo método construtor da classe pai. 
            
            Outro detalhe importante: caso a subclasse NoticiaPrincipal tenha declarado um método 
            construtor na sua estrutura, este pode invocar o método construtor da classe pai. 
            Nesse caso, podemos chamar o método construtor da Classe Noticia, 
            através de uma chamada específica: parent::__construct()
      */
      public function __construct($valor_tit, $valor_txt, $valor_img)
      {
            // invoca o construtor da classe base (ou pai)
            parent::__construct($valor_tit, $valor_txt);
            $this->imagem = $valor_img;
      }

      // $caminho - guarda a localização da imagem
      public function setImagem($caminho)
      {
            $this->imagem = $caminho;
      }

      // os atributos "titulo" e "texto" são herdados da classe base.
      // ## reescrita do método mostraNoticia() ##
      public function mostraNoticia()
      {
            echo "<center>";
            echo "<img src=\"" . $this->imagem . "\"><p>";
            echo "<b>" . $this->titulo . "</b><p>";
            echo $this->texto;
            echo "</center><p>";
      }
}

/*
      Conclusão:
      A classe NoticiaPrincipal herdou todas as características da classe Noticia e adiciona 
      um novo método que dá suporte à visualização de imagens. 
      Nas subclasses é possível redefinir métodos, podendo modificá-los segundo as preferências 
      do programador, como foi o caso do método mostraNoticia(). 
      Sobrescrever métodos é algo bastante comum no processo de herança, visto que os métodos 
      que foram criados na classe “pai” não precisam ser necessariamente os mesmos que os 
      definidos nas classes “filhas”.
*/

?>