<?php

    /*
        As Interfaces permitem a criação de código que especificam quais os métodos 
        da classe que deve implementar, sem ter que definir como esses métodos serão tratados.
        
        Portanto, uma interface é um modelo de assinaturas de métodos para outras interfaces
        ou classes implementarem.
        
        Interfaces são definidas utilizando a palavra-chave interface, devem ter definições 
        para todos os métodos listados na interface. 
        As classes podem implementar mais de uma interface, listando cada interface 
        separada por um espaço.

        Uma interface também pode extender outra interface, permitindo definir dependências.

        Nas interfaces também podemos definir constantes.
    */
    interface iNoticia
    {
        // 3 assinaturas, estas devem ser públicas
        public function setTitulo($valor);
        public function setTexto($valor);
        public function mostraNoticia();
    }
?>