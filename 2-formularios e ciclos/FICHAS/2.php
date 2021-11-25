<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Processa Fatura</title>
    <style type="text/css" media="screen">
		.numero { font-weight: bold;}
        .erro {font-weight: bold; color: #C00;}
	</style>
</head>

<body>
<?php

    // define o valor do IVA
    define('IVA', 23);
    define('NUMMAX', 99999);

    // define a função de calcula o valor a pagar do produto a calcular
    function CalculaTotal($qt, $pre, $trans, $desc, $taxa=23)
    {
        // Calculate the total:
        $total = (($pre * $qt) + $trans) - $desc;
        
        // calcula o iva
        $iva = $total * ($taxa/100);
        
        // Soma o iva ao total da fatura
        $total = $total + $iva;
        
        // Formata o total com duas casas decimais
        return number_format ($total, 2);
    }


    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviado']))
    {
        // Get the values from the $_POST array:
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $desconto = $_POST['desconto'];
        $transporte = $_POST['transporte'];

        if(is_numeric($quantidade) && is_numeric($preco))
        {

            /*
                addslashes - Adicione uma barra invertida na frente do caracter aspas:
                addslashes(<span class="numero">$quantidade</span>)
                Dá: <span class=\"numero\">$quantidade</span>
            */

            // Imprime os resultados
            echo addslashes('<p>Detalhes da compra:<br />
                <span class="numero">' . $quantidade . '</span> produtos, cada um custa 
                <span class="numero">' . $preco . '</span>€.<br /> O transporte custa
                <span class="numero">' . $transporte . '</span>€.<br /> A taxa do IVA é 
                <span class="numero">'. IVA . '</span>%.<br />
                Teve um desconto de <span class="numero">' . $desconto . '</span>€. O total da fatura é:
                <span class="numero">' . CalculaTotal($quantidade, $preco, $transporte, $desconto, IVA) . '€</span>.<br />      
                </p>');    
        }
        else {
            echo "<h1>Erro!</h1><p class=\"erro\">Insira valores válidos para o preço e quantidade!!</p>";
        }
        
        // cria um número aleatório entre 1 e 99999
        $sorte = rand (1, NUMMAX);
        echo "<p>A factura da sorte é:<b> $sorte </b></p>";
        
        exit(0);
    }
    
?>
    
    <p>Prencha os campos da fatura</p>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

        <p>Preço: <input type="text" name="preco" size="5" value="<?php if(isset($_POST['preco'])) echo $_POST['preco'] ?>" /></p>
        <p>Quantidade: <input type="text" name="quantidade" size="5" value="<?php if(isset($_POST['quantidade'])) echo $_POST['quantidade']  ?>" /></p>
        <p>Desconto (inteiro): <input type="text" name="desconto" size="5" value="<?php if(isset($_POST['desconto'])) echo $_POST['desconto']  ?>" /></p>

        <p>Despesas de transporte: 
        <select name="transporte">
            <option value="5.00">Até 5Kg</option>
            <option value="8.00">Até 10Kg.</option>
            <option value="15.00">Mais de 10Kg</option>
        </select>
        </p>

        <input type="submit" name="submit" value="Calcular!" />
        <input type="hidden" name="enviado" value="TRUE" />
        
    </form>
</body>
</html>
