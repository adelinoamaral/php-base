<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Classificação pela Idade</title>
    <style>
        #erro{color:red; font-size:1.2em;}
    </style>
</head>

<body>
    <?php
        if(isset($_POST['envia']))
        {   
            $erro = FALSE;  // assinala um erro
            
            if(!empty($_POST['nome'])){
                $nome = $_POST['nome'];
                $erro = TRUE;   // não há erro
            }
            
            if(!empty($_POST['idade'])){
                $idade = $_POST['idade'];
                $erro = TRUE;   // não há erro
            }
            
            if($erro) {
                if($idade < 14) {
                    $str = "criança";
                }
                elseif($idade < 18){
                    $str = "adolescente";
                }
                elseif($idade < 65) {
                    $str = "adulto";
                }
                else {
                    $str = "idoso";
                }
                
                echo "<p>Olá $nome, a tua classificação é: $str</p>";
            }
            else {
                echo "<p id=\"erro\">Não preencheu todos os campos...</p>";
            }
        }
    ?>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <p>Nome: <input type="text" name="nome" size="40" /></p>
        <p>Idade: <input type=text name="idade" size="3" /> </p>
        <p><input type="submit" name="envia" value="Enviar Dados" /></p>
    </form>
</body>
</html>
