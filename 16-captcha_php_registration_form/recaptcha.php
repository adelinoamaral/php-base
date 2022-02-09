
    <?php
        if(isset($_POST['enviar'])){
             // print_r($_POST);
            $msg = null;
            if(empty($_POST['nome'])){
                 $msg .= "<h4>Insira o seu nome</h4>";
            }
            if(empty($_POST['apelido'])){
                $msg .= "<h4>Insira o seu apelido</h4>";
            }

            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
                // continua com o envio do formulário
                $url = "https://www.google.com/recaptcha/api/siteverify";
                $secret = "6LcdN2keAAAAANHLckwR6U-Isfp3MM5Ifhn6BhpW";
                $response = $_POST['g-recaptcha-response'];
                $variaveis = "secret=". $secret . "&response=" . $response;
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $variaveis);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                // devolve JSON
                $resposta = curl_exec($ch);
                //print_r($resposta);
                // transforma JSON num objeto
                $resultado = json_decode($resposta);
                // print_r($resultado);
                // echo $resultado->success;
                if($resultado->success == 1){
                    echo "Continua com o envio do formulário";
                }
            }else {
                $msg .= "<h4>Marque o Recaptcha</h4>";
            }
        }
           
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recaptcha</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div>
        <?php
        if(!empty($msg)){
            echo $msg;
        }
        ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="apelido" placeholder="Apelido">
        </div>
        <div class="g-recaptcha" data-sitekey="6LcdN2keAAAAAOU0G_Lh0yjZBl_ZMQVsV5kuqrPf"></div>
        <!-- <input type="submit" name="enviar" value="Enviar" onclick="return valida()"> -->
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <script>
        const valida = () => {
            if(grecaptcha.getResponse() == "") {
                // não deixa submeter
                alert("Marque a caixa de validação");
                return false;
            }
        }
    </script>

</body>
</html>