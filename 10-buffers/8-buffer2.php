<?php

function muda($buffer)
{

  // substitui todas as palavras maçã por MAÇÃ no conteúdo da variável buffer.
   return (str_replace("maçã", "MAÇÃ", $buffer)); 

}

// Inicia o processo de captura
ob_start("muda");

?>

<!doctype html>
<html lang="pt-pt">
<head>
    <meta charset="utf-8">
    <title>Buffer</title>
</head>
<body>
    <h1>Quais são os benefícios da maçã para a saúde?</h1>
    <p> As propriedades benéficas da maçã vão desde a casca, onde se encontra a pectina, que reduz o colesterol ruim do sangue e, 
	além disso, também tem vitaminas essenciais à saúde. A maçã possui propriedades antioxidantes, que combatem os radicais livres, 
	o que beneficia o organismo por completo, já que protege todas as células do nosso corpo contra agressores externos que causam doenças 
	e envelhecimento precoce, por exemplo. Para os fumantes e para os que sofrem com problemas pulmonares, essa fruta é milagrosa, pois ajuda 
	a promover uma proteção aos pulmões e uma capacidade respiratória melhor. Suas propriedades antioxidantes também protegem nosso 
	coração e previnem certos tipos de câncer, como o de cólon e mama. É eficaz para tratar a voz e a garganta,  por suas propriedades adstringentes.</p>

    <p>A maçã possui ferro, que contribui para a formação do sangue e fósforo, que fortalece os dentes e beneficia o cérebro; ela ainda 
	contribui para tratamentos do sistema nervoso e, nas dietas, é excelente aquisição, já que, além de todos os benefícios à saúde, 
	ainda causa saciedade, tira a vontade de comer doces e deixa a pele macia e sem manchas!</p>
    
    <p>Texto retirado de: <i>http://www.remedio-caseiro.com/conheca-as-propriedades-beneficas-da-maca-para-nossa-saude/</i></p>
</body>
</html>

<?php
// envia o conteúdo do buffer para o browser, limpa o buffer e encerra-o.
ob_end_flush();

?>