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
                    
                    <form action="processa/grava_empregado.php" method="post">
                       
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>
                        
                        <div class="form-group">
                            <label>Endereço</label>
                            <textarea name="address" class="form-control"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Salário</label>
                            <input type="text" name="salary" class="form-control" value="">
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