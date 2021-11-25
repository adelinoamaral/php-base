<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
        $listagem = array(
            "Pedro" => "Curso de GPSI",
            "Carlos" => "Curso de Multimédia",
            "Raul" => "Curso de Multimédia",
            "Ana" => "Curso de Multimédia",
            "Pereira" => "Curso de Multimédia",
            "Vitor" => "Curso de GPSI",
            "Gomes" => "Curso de GPSI",
            "Liliana" => "Curso de GPSI",
        );
        $contador = 1;
        
    ?>
   
    <div class="container table-responsive table-hover">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Linha</th>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listagem as $key => $valor) { ?>
                <tr>
                    <td><?php echo $contador ?></td>
                    <td><?php echo $key ?></td>
                    <td><?php echo $valor ?></td>
                    <td class="preto">
                        <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></i></a>&nbsp&nbsp
                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>&nbsp&nbsp
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php $contador++; } ?>
            </tbody>
        </table>
    </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/css/bootstrap.min.css"></script>
</body>

</html>