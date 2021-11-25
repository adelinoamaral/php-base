<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Detalhes dos Empregados</h2>
                        <a href="create.php" class="btn btn-success pull-right">Adiciona Novo Empregado</a>
                    </div>
                    <?php
                        $id = 1;
                        $name = "Raul Brandão";
                        $address = "Rua da Remolha";
                        $salary = 1000;
                        echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Nome</th>";
                                    echo "<th>Endereço</th>";
                                    echo "<th>Salário</th>";
                                    echo "<th>Ação</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                                echo "<tr>";
                                    echo "<td>" . $id . "</td>";
                                    echo "<td>" . $name . "</td>";
                                    echo "<td>" . $address . "</td>";
                                    echo "<td>" . $salary . "</td>";
                                    echo "<td>";
                                    echo "<a href='read.php?id=". $id ."' title='Visualiza Registo' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                    echo "<a href='update.php?id=". $id ."' title='Atualiza Registo' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='delete.php?id=". $id ."' title='Elimina Registo' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                    echo "</td>";
                                echo "</tr>";    
                    
                                $id = 2;
                                $name = "Cátia Meireles";
                                $address = "Rua do Arco";
                                $salary = 1200;
                                echo "<tr>";
                                    echo "<td>" . $id . "</td>";
                                    echo "<td>" . $name . "</td>";
                                    echo "<td>" . $address . "</td>";
                                    echo "<td>" . $salary . "</td>";
                                    echo "<td>";
                                    echo "<a href='read.php?id=". $id ."' title='Visualiza Registo' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                    echo "<a href='update.php?id=". $id ."' title='Atualiza Registo' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='delete.php?id=". $id ."' title='Elimina Registo' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                    echo "</td>";
                                echo "</tr>"; 
                    
                            echo "</tbody>";                            
                        echo "</table>";
                      
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>