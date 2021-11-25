<?php
    // Fazer refresh do browser para atualizar o contador.

    $filename = "contador.txt";

    // Se tentar abrir um ficheiro que não existe, o PHP gera uma mensagem de erro.
    // Para evitar este tipo de erro deve verificar se o ficheiro ou directório existe.
    if(file_exists($filename))
    {
        // abre o ficheiro para leitura. A variável $pont1 fica apontar para o início do ficheiro.
        $pont1 = fopen($filename, "r");

        // fgets - lê uma linha do ficheiro.
        $conta_a = fgets($pont1, 10);

        $conta_a++;
        echo "Nº de acesso: " . $conta_a;

        // Fecha o ficheiro aberto
        fclose($pont1);

        // A opção "w" - apaga o conteúdo do ficheiro.
        $pont2 = fopen($filename, "w");
        // podemos gravar vários valores fputs($pont2, $val1, $val2, $val3, ...);
        fputs($pont2, $conta_a);

        // Antes de terminar o script temos que fechar o ficheiro que foi aberto.
        fclose($pont2);
    }
    else {//fputs($pont2, $val1, $val2, $val3, ...);
        // O ficheiro não existe. então cria um ficheiro e inícia o ficheiro com o valor 1
        $pont = fopen($filename, "w");
        fputs($pont, "1");
        fclose($pont);
    }
 ?>
