<?php
# carrega as classes
include_once 'classes/Pessoa1.class.php';
include_once 'classes/Conta1.class.php';

// cria uma instância da classe Pessoa
$carlos = new Pessoa;
// Inicializa as propriedades do objeto
$carlos->Codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->Altura = 1.85;
$carlos->Nascimento = '10/04/1998';
$carlos->Escolaridade = "Técnico em Informática";

echo "Chamo-me $carlos->Nome :<br>\n";
echo "O {$carlos->Nome} tem o curso {$carlos->Escolaridade} <br>\n";

$carlos->Formar('Técnico em Eletricidade');
echo "O {$carlos->Nome} tem o curso {$carlos->Escolaridade} <br>\n";
echo "{$carlos->Nome} possui {$carlos->ObterIdade($carlos->Nascimento)} anos <br>\n";

// -----------------------------------------------------------------------------------------------

# cria o objeto $conta_carlos
$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/07/2000";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "<br>\n";
echo "Gestão da conta de: {$conta_carlos->Titular->Nome} <br>\n";
echo "O saldo atual é {$conta_carlos->ObterSaldo()}€ <br>\n";
$conta_carlos->Depositar(20);
echo "O saldo atual é {$conta_carlos->ObterSaldo()}€ <br>\n";
$conta_carlos->Levantar(10);
echo "O saldo atual é {$conta_carlos->ObterSaldo()}€ <br>\n";
?>
