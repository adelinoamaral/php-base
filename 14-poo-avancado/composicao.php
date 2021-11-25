<?php
include_once 'classes/Fornecedor2.class.php';
include_once 'classes/Contato.class.php';

# instância a classe fornecedor
$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A.';

# atribui informa��es de contato
$fornecedor->SetContato('Mauro', '51 1234-5678', 'mauro@bomgosto.com.br');

# imprime informações
echo $fornecedor->RazaoSocial . "<br>\n";
echo "Informações de Contato<br>\n";
echo $fornecedor->GetContato();
?>
