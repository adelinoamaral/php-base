<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    .altura {
        margin-top: 100px;
    }
    </style>
</head>

<body>
    <div class="container altura">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td><?php echo $_GET["email"]; ?></td>
                    <td><?php echo $_GET["password"]; ?></td>
                    <td><?php echo $_GET["endereco1"]; ?></td>
                    <td><?php echo $_GET["endereco2"]; ?></td>
                    <td><?php echo $_GET["cidade"]; ?></td>
                    <td><?php echo $_GET["distrito"]; ?></td>
                    <td><?php echo $_GET["cod_postal"]; ?></td>
                    <td><?php echo $_GET["marca"]; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>