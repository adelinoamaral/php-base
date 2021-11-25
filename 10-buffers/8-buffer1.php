<!doctype html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Buffering</title>
</head>

<body>
<?php
    // Inicia o processo de captura
    // Inicializa o buffer e bloqueia qualquer saída para o browser
    ob_start();
     
    // Executa a função phpinfo()
    phpinfo();
     
    // Neste momento o output da função phpinfo() não é direcionada para o browser
     
    // Guardar o valor do buffer na variável $resultado
    $resultado = ob_get_contents();
     
    // Já podemos encerrar o buffer e limpar o seu conteúdo
    ob_end_clean();
     
    // Agora é só gravar num ficheiro os dados recolhido
    $ok = file_put_contents('phpinfo.html', $resultado);
     
    // Envia uma mensagem ao utilizador informando o estado da operação
    if ($ok) {
        echo 'O ficheiro foi gravado com sucesso.<br />';
        echo '<a href="phpinfo.html">Clique aqui para visualizar</a>';
    } else {
        echo 'Ocorreu um erro. Verifique as permissões do ficheiro...';
    }
     
?>
</body>
</html>
