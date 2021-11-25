<?php
    /**
     * Uma ocorrências anormal que afeta o funcionamento da aplicação
     * Exception é a classe base para todas as Exceptions
     * message, code, file, line
     */

     class Newsletter{
         public function registarEmail($email){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                // o código é um número à escolha
                throw new Exception("Este email é inválido", 11);
            else:
                echo "Email registado com sucesso!";
            endif;
         }
     }

     $newsletter = new Newsletter();

     // tratamento da exceção
     try{
        $newsletter->registarEmail("cobta@");
     }catch(Exception $e){
        echo $e->getMessage() . "<br>";
        echo $e->getCode() . "<br>";
        echo $e->getLine();
        echo $e->getFile();
     }
     