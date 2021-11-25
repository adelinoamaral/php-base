<?php
// Include config file
require_once 'config.php';
 
// Define variáveis e inicialize-as a vazio
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 

// Processar dados do form depois da sua submissão
if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    // Get hidden input value
    $param_id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        
        $name_err = "Insira o nome.";
        
    } elseif(!filter_var(trim($_POST["name"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-ZçÇ'-.\s ]+$/")))){
        
        $name_err = 'Insira um nome válido.';
        
    } else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        
        $address_err = 'Insira um endereço.';  
        
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        
        $salary_err = "Insira o salário.";  
        
    } elseif(!ctype_digit($input_salary)){
        
        $salary_err = 'Insira um número inteiro.';
        
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in file text
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        
        if(file_exists(TXT_FILENAME))
        {
            $link = fopen(TXT_FILENAME, "r") or die("ERRO: não é possível abrir o ficheio");
            
            // Copia todos os registos para o ficheiro temporário excepto o selecionado.
            $linktmp = fopen(TXT_FILENAME_TMP, "w") or die("ERRO: não é possível abrir o ficheio");
            
             while(!feof($link)){
                 
                // lê uma linha do ficheiro
                $content = fgets($link);    
                if($content != null){
                    
                    list($idp, $namep, $addressp, $salaryp) = explode(":", $content);
                     
                    if($idp != $param_id){
                        
                        fwrite($linktmp, $content);
                    }
                    else {
                        $content_tmp = "$param_id:$name:$address:$salary\n";
                        fwrite($linktmp, $content_tmp);
                    }
                    
                }
             } // end while
            
            fclose($linktmp);
            fclose($link);
            
            if(!unlink(TXT_FILENAME)) {    // Remove File
                header("location: error.php");
                exit();
            }
            
            if(!rename(TXT_FILENAME_TMP, TXT_FILENAME)) { // Renaming File
                header("location: error.php");
                exit();
            }
            
            header("location: index.php");
        }
        else {
            header("location: error.php");
            exit();
        }
    }
    
} else{
    
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $param_id =  trim($_GET["id"]);
        
        if(file_exists(TXT_FILENAME))
        {
            $link = fopen(TXT_FILENAME, "r") or die("ERRO: não é possível abrir o ficheio");
             while(!feof($link)){
                 // lê uma linha do ficheiro
                $content = fgets($link);
                 
                if($content != null){
                    
                    list($id, $namep, $addressp, $salaryp) = explode(":", $content);
                    
                    if($id == $param_id){
                        $name = $namep; 
                        $address = $addressp; 
                        $salary = $salaryp;
                    }
                }
             }
        }
        else {
            header("location: error.php");
            exit();
        }
        
    }  else{
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Registo</title>
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
                        <h2>Atualizar Registo</h2>
                    </div>
                    
                    <p>Preencha o formulário para atualizar o registo.</p>
                    
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Endereço</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salário</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Gravar">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>