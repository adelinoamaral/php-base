<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
   
    require_once 'config.php';
    
    $param_id = trim($_POST["id"]);
    
    if(file_exists(TXT_FILENAME))
    {
        $link = fopen(TXT_FILENAME, "r") or die("ERRO: não é possível abrir o ficheio");
        $linktmp = fopen(TXT_FILENAME_TMP, "w") or die("ERRO: não é possível abrir o ficheio");

         while(!feof($link)){

            // lê uma linha do ficheiro
            $content = fgets($link);    
            if($content != null){

                list($idp, $namep, $addressp, $salaryp) = explode(":", $content);

                if($idp != $param_id){

                    fwrite($linktmp, $content);
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
   
    
    
} else{
    
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Elimina Registo</title>
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
                        <h1>Elimina Registo</h1>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Tem a certeza que deseja eliminar o registo?</p><br>
                            <p>
                                <input type="submit" value="Sim" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">Não</a>
                            </p>
                        </div>
                    </form>
                    
                </div>
            </div>        
        </div>
    </div>
</body>
</html>