<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .altura{
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <?php
      if(isset($_POST["email"]))
      {
        $email = $_POST["email"];
      }
      if(isset($_POST["password"]))
      {
        $password = $_POST["password"];
      }
      if(isset($_POST["endereco1"]))
      {
        $endereco1 = $_POST["endereco1"];
      }
      if(isset($_POST["endereco2"]))
      {
        $endereco2 = $_POST["endereco2"];
      }
      if(isset($_POST["cidade"]))
      {
        $cidade = $_POST["cidade"];
      }
      if(isset($_POST["distrito"]))
      {
        $distrito = $_POST["distrito"];
      }
      if(isset($_POST["cod_postal"]))
      {
        $cod_postal = $_POST["cod_postal"];
      }
      if(isset($_POST["marca"]))
      {
        $marca = $_POST["marca"];
      }
    
      $str = "mostradados.php?email=$email&password=$password&endereco1=$endereco1&endereco2=$endereco2&cidade=$cidade";
      $str .= "&distrito=$distrito&cod_postal=$cod_postal&marca=$marca";
    ?>
    <div class="container altura">
        <a class="btn btn-link" href="<?php echo $str; ?>" role="button">Dados do formulário</a>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>