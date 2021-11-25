<?php
// ligação ao servidor
require_once 'config.php';
include 'include/api.php';
 
// Define variáveis e inicializa-as a vazio
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        
        $name_err = "Insira o nome.";
        
    } elseif(!filter_var(trim($_POST["name"]), 
                         FILTER_VALIDATE_REGEXP, 
                         array("options"=>array("regexp"=>"/^[a-zA-ZçÇ'-.\s ]+$/"))) ){
        
        $name_err = 'Insira um nome válido.';
        
    } else{
        
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        
        $address_err = 'Insira um endereço vállido.';     
        
    } else{
        
        $address = $input_address;
        
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        
        $salary_err = "Insira o salário.";
        
    } elseif(!ctype_digit($input_salary)){
        
        $salary_err = 'Insira um valor inteiro.';
        
    } else{
        $salary = $input_salary;
    }
    
        
    // Check erros antes de inserir registo na base de dados
    if(empty($name_err) && empty($address_err) && empty($salary_err))
    {
        $count = numRows();
        // A pasta atual deve ter permissões de escrita
        $link = fopen(TXT_FILENAME, "a+") or die("Problemas com a abertura do ficheiro");
            
        $content = "$count:$name:$address:$salary\n";
                                                 
        fwrite($link, $content); 
        fclose($link);
        header("location: index.php"); 
    }
}
?>


<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Cria Registo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Cria Registo</h2>
                    </div>
                    <p>Preencha os campos para inserir um novo empregado.</p>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                       
                        <div class="form-group <?php echo (!empty($name_err)) ? 'tem erro' : ''; ?>">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($address_err)) ? 'tem erro' : ''; ?>">
                            <label>Endereço</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'tem erro' : ''; ?>">
                            <label>Salário</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Gravar">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                    
                </div>
            </div>        
        </div>
    </div>
</body>
</html>