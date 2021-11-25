<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Estrutura IF</title>
    <style type="text/css" media="screen">
		.erro { color: red; }
	</style>
</head>

<body>
<?php
    // verifica se $_POST['enviado'] existe
    if (isset($_POST['enviado']))
    {
        $okay = TRUE;
        $ano = date("Y", time());

        // Valida o email
        if (empty($_POST['email'])) {
            echo '<p class="erro">Preencha o email.</p>';
            $okay = FALSE;
        }

        // Valida a password
        if (empty($_POST['password'])) {
            echo '<p class="erro">Prencha a password.</p>';
            $okay = FALSE;
        }

        // Check the two passwords for equality:
        if ($_POST['password'] != $_POST['confirma']) {
            echo '<p class="erro">As passwords não coincidem.</p>';
            $okay = FALSE;
        }       
        
        // Valida o ano
        if ( is_numeric($_POST['ano']) AND (strlen($_POST['ano']) == 4) ) {

            // Check that they were born before 2011.
            if ($_POST['ano'] < $ano) {
                $age = $ano - $_POST['ano']; // Calcula a idade
            } else {
                echo '<p class="erro">Inseriu um ano inválido.</p>';
                $okay = FALSE;
            } // End of 2nd conditional.

        } else {

            echo '<p class="erro">Insira um ano de 4 digitos.</p>';
            $okay = FALSE;

        }

        // Valida a aceitação do termo, verifica se $_POST['termo'] existe
        if ( !isset($_POST['termo'])) {
            echo '<p class="erro">Deve aceitar o termo.</p>';
            $okay = FALSE;	
        }        
        
        // Valida a cor
        if ($_POST['cor'] == 'vermelho') {
            $tipo_cor = 'primária';
        } elseif ($_POST['cor'] == 'amarelo') {
            $tipo_cor = 'primária';
        } elseif ($_POST['cor'] == 'verde') {
            $tipo_cor = 'secondária';
        } elseif ($_POST['cor'] == 'azul') {
            $tipo_cor = 'primária';
        } else { // Problem!
            echo '<p class="erro">Insira a sua cor favorita.</p>';
            $okay = FALSE;
        }        
        
        if ($okay) {
            echo '<p>Operação com sucesso...</p>';
            echo "<p>Tem $age anos e a sua cor favorita é " . $_POST['cor'] . ", uma cor $tipo_cor.</p>";
            // o script termina, o formulário não volata a aparecer
            exit(0);
        }
    }
?>
    
    
    <div>
        <p>Prencha o formulário:</p>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p>Email: <input type="text" name="email" size="30" /></p>
            <p>Password: <input type="password" name="password" size="20" /></p>
            <p>Confirme Password: <input type="password" name="confirma" size="20" /></p>
            <p>Ano de nascimento: <input type="text" name="ano" value="YYYY" size="4" /></p>
            <p>Cor favorita: 
            <select name="cor">
                <option value="">Escolha ...</option>
                <option value="vermelho">Vermelho</option>
                <option value="amarelo">Amarelo</option>
                <option value="verde">Verde</option>
                <option value="azul">Azul</option>
            </select>
            </p>
            <p><input type="checkbox" name="termo" value="Sim" /> Aceito o termo de responsabilidade.</p>

            <input type="submit" name="submit" value="Registar" />
            <input type="hidden" name="enviado" value="TRUE" />
        </form>
    </div>
    
</body>
</html>
