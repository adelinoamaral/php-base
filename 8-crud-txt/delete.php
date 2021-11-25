<?php
    // inclui o ficheiro config.php
    require_once 'config.php';

    if(isset($_POST["id"]) && !empty($_POST["id"])){
        // a variável tem valor
        $id = trim($_POST["id"]);
        
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=" . PATH_ROOT . "index.php'>";
        echo "<script type=\"text/javascript\">
					alert(\"Registo Eliminado com Sucesso.\");
				</script>
			";
        
    } else{
        $id = trim($_GET["id"]);
        
        // Verifica se o parametro id chega aqui
        if(empty(trim($_GET["id"]))){
            // redireciona automaticamente para o ficheiro
            header("location: error.php");
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
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <p>Tem a certeza que deseja eliminar o registo <?php echo $id; ?> ?</p><br>
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