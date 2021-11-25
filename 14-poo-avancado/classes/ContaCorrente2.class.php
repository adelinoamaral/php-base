<?php
class ContaCorrente extends Conta
{
    // amplia as propriedades da classe Conta
    public $TaxaTransferencia = 2.5;
    public $Limite;
    
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
    {
        // Inicia/chamada do método construtor da classe-pai.
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }
  

    /**

      * Método Levantar (reescrito)
      * Descrição: permite levantar da conta a quantia $quantia dentro de um limite
      */
    function Levantar($quantia)
    {
        // define um imposto sobre movimento financeiro
        $cpmf = 0.05;
        if ( ($this->Saldo + $this->Limite) >= $quantia )
        {
            // Executa método da classe-pai.
            parent::Levantar($quantia);

            // Debita o Imposto
            parent::Levantar($quantia * $cpmf);
        }
        else
        {
            echo "Operação de levantamento não autorizada...\n";
            return false;
        }

        // retirada permitida
        return true;
    }


    
    final function Transferir($Conta, $Valor)
    {
        if ($this->Levantar($Valor))
        {
            $Conta->Depositar($Valor);
        }
        
        if ($this->Titular != $Conta->Titular)
        {
            $this->Levantar($this->TaxaTransferencia);
        }
    }
}
?>