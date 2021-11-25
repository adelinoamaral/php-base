<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    
    require_once 'config.php';
    
    
    $param_id = trim($_GET["id"]);
    
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
                else {
                    echo "O registo não existe";
                }
            }
         }
        fclose($link);
    }
    else {
        header("location: error.php");
        exit();
    }
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visualize o Registo</title>
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
                        <h1>Visualize o Registo</h1>
                    </div>
                    <div class="form-group">
                        <label>Nome</label>
                        <p class="form-control-static"><?php echo $name; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <p class="form-control-static"><?php echo $address; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Salário</label>
                        <p class="form-control-static"><?php echo $salary; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Voltar</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>