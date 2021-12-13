<?php

    /* 
        Antes de armazenar qualquer informação em variáveis de sessão, primeiro
        deve iniciar a sessão.

        session_start() - indica que a sessão vai ser iniciada - primeira função a aparecer
        cria automaticamente o SID

        A função session_start() primeiro verifica se já existe uma sessão pela presença de
        um ID de sessão. Se a sessão já estiver sido iniciada, é possível a manipulação das
        variáveis de sessão, caso contrário, uma nova sessão será criada com um novo ID.

        Deve chamar a função session_start() no início da página, ou seja, antes de qualquer 
        saída gerada pelo script.

        Sessões e cookies guardam os dados globalmente, logo acessíveis por todo o site.
        Recorde que as sessões são armazenadas no servidor e os cookies são preservados 
        no browser (no lado do cliente).
        
    */

    session_start();

    // A presente página, o formulário do login, não pode aparecer depois
    // do utilizador estar autenticado.

    // Verifica se o utilizador tem a autenticação realizada.
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        header("location: dasboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Carrega a font Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Carrega os estilos -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div class="col">
            <form action="processa/valida.php" method="post">
                <div>
                    <label for="InputEmail1">Email</label>
                    <input type="email" name="email" id="InputEmail1" placeholder="Insira o Email" required>
                </div>
                <div>
                    <label for="InputPassword1">Senha</label>
                    <input type="password" name="senha" id="InputPassword1" placeholder="Insira a Senha" required>
                </div>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>