<?php

    /*
        cria uma diretoria
    */
    function makeDirecoty($dir){
        
        if(!file_exists($dir)){

            if(mkdir($dir)){
                if(!chmod($dir, 0766)){  // mudar as permissões para escrita
                    return false;
                } 
                return true;   // created directory
            } else{
                return false;   // not create directory
            }
        } else{
            return false;   // directory exist
        }
        
    }


    /*
        devolve o último id do ficheiro

    */
    function ultimoID(){
        $count =0;
        
        if(file_exists(TXT_FILENAME)){
            $link = fopen(TXT_FILENAME, "r") or die("Problemas com a abertura do ficheiro");
            while(! feof($link))
            {
                $content = fgets($link);
                if(!empty($content)){
                    list($id, $namep, $addressp, $salaryp) = explode(":", $content);
                    $count = $id;    
                }
            }
            fclose($link);
            return $count;
        }
    }

?>