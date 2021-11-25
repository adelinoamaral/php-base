<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formumário de Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <?php
    // deteta se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviado'])) {

        // inicialização das variáveis
        $nome       = $_POST['nome'];
        $email      = $_POST['email'];
        $idade      = $_POST['idade'];
        $sexo      = $_POST['sexo'];
        $comentario = $_POST['comentario'];
        $erro = NULL;

        if (!empty($_POST['nome'])) {
            $nome = $_POST['nome'];
        } else {
            $nome = NULL;
            $erro .= "nome "; // acumula mensagem de erro
        }

        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $email = NULL;
            $erro .= ", email ";
        }

        if (!empty($_POST['comentario'])) {
            $comentario = $_POST['comentario'];
        } else {
            $comentario = NULL;
            $erro .= ", comentário"; 
        }

        echo "<div class=\"container mt-5\">";

        // ALTERA O CÓDIGO HTML POR FORMA A EVITAR A FUNÇÃO ISSET SEGUINTE
        if (isset($_POST['sexo'])) {

            $sexo = $_POST['sexo'];
            if ($sexo == 'M') {
                echo '<p><b>Bom dia Sr. </b> ';
            } elseif ($sexo == 'F') {
                echo '<p><b>Bom dia Sra. </b> ';
            }
        }

        // mostra as diferentes mensagens de erro acumuladas
        if (!empty($erro)) {
            echo "<div class=\"alert alert-warning\" role=\"alert\">";
                echo "Deve preencher o(s) campo(s): " . $erro;
            echo "</div>";
        }

        // se todos os campos foram preenchidos então apresenta um resumo 
        // da informação inserida no formulário.
        if ($nome && $email && $sexo && $comentario) {
            echo $nome . " pelo comentário: " . $comentario . "<br />";
            echo "Envieremos informação para o endereço <b>" . $email . "</b>";
        }

        echo "</div>";

    }else {
    ?>

    <main>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-end py-3 mb-4 border-bottom">
                
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Recursos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Preços</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </header>

            <h3 class="mt-5">Formulário de Contacto</h3>
            <form class="row g-3" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <div class="col-md-12">
                    <label for="inputNome" class="form-label">Nome</label>
                    <input type="text" name="nome" size="20" maxlength="40" class="form-control" id="inputNome" placeholder="Insira o seu nome">
                </div>

                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" size="40" maxlength="60" class="form-control" id="inputEmail" placeholder="Insira o seu email">
                </div>

                <div class="col-6">
                    <div class="form-label">Sexo</div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" 
                            type="radio" 
                            name="sexo" 
                            id="inlineRadio1" 
                            value="M"
                            checked>
                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" 
                            type="radio" 
                            name="sexo" 
                            id="inlineRadio2" 
                            value="F">
                        <label class="form-check-label" for="inlineRadio2">Feminino</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="inputAtividade" class="form-label">Atividade</label>
                    <select id="inputAtividade" class="form-select" name="idade">
                        <option value="0-17" selected>Menor</option>
                        <option value="18-65">Produtor</option>
                        <option value="60+">Reformado</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="inputCity" class="form-label">Menssagem</label>
                    <textarea name="comentario" rows="3" cols="40" class="form-control" id="inputCity"></textarea>
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
                    <input type="hidden" name="enviado" value="TRUE" />
                </div>
            </form>
        </div>
    </main>
    <?php
    }
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>