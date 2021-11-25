<?php
final class ContaPoupanca extends Conta
{
    public $Aniversario;
    
    
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
    {
        // chamada do m�todo construtor da classe-pai.
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Aniversario = $Aniversario;
    }
    
    
    function Levantar($quantia)
    {
        if ($this->Saldo >= $quantia)
        {
            // Executa m�todo da classe-pai.
            parent::Retirar($quantia);
        }
        else
        {
            echo "Operação de levantamento não autorizada...\n";
            return false;
        }
    
        return true;
    }
}
?>