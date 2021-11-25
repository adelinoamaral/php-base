<?php
    //
    // valida o nome do utilizador
    //
    $input_name = trim($_POST["name"]);
    // verifica se a variável está vazia
    if(empty($input_name)){
        
        $name_err = "Insira o nome.";
        
    } elseif(!filter_var(trim($_POST["name"]),  // verifica se o nome é válido
                         FILTER_VALIDATE_REGEXP, 
                         array("options"=>array("regexp"=>"/^[a-zA-ZçÇ'-.\s ]+$/"))) ){
        
        $name_err = 'Insira um nome válido.';
        
    } else{
        // o nome existe e é válido
        $name = $input_name;
    }
    
    //
    // Valida endereço
    //
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        
        $address_err = 'Insira um endereço válido.';     
        
    } else{
        // endereço válido
        $address = $input_address;
        
    }
    
    //
    // Valida salário
    //
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        
        $salary_err = "Insira o salário.";
        
    } elseif(!ctype_digit($input_salary)){
        
        $salary_err = 'Insira um valor inteiro.';
        
    } else{
        $salary = $input_salary;
    }
    
    // 
    // Check erros
    //
    if(empty($name_err) && empty($address_err) && empty($salary_err))
    {
        echo "Dados que seriam gravados...<br>";
        echo "$name vive em $address e recebe um vencimento de $salary <br>";
        echo "<a href=\"..\index.php\" class=\"btn btn-default\">Voltar para a página principal</a>";
    }



?>
