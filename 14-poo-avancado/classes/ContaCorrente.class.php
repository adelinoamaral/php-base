<?php
class ContaCorrente extends Conta
{
    public $Limite;
    

    /**
      * Método construct (reescrito)
      * Descrição: inicializa propriedades ou/e métodos
      */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
    {
        // chamada do método construtor da classe-pai.
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }

    
     /**
      * Nome antigo: Levantar (reescrito)
      * Método Levantar
      * Descrição: permite levantar da conta a quantia $quantia dentro de um limite
      */
    function Levantar($quantia)
    {
        // imposto sobre o movimento financeiro
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

        // Levantamento permitido
        return true;
    }
}
?>