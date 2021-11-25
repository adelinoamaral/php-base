<?php
class Conta
{
    // propriedades que definem uma conta
    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;
    

     /**
      * Método construct
      * Descrição: inicializa propriedades ou/e métodos
      */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
    {
        // inicializa as propriedades
        $this->Agencia          = $Agencia;
        $this->Codigo           = $Codigo;
        $this->DataDeCriacao    = $DataDeCriacao;
        $this->Titular          = $Titular;
        $this->Senha            = $Senha;
        $this->Cancelada        = false;

        // chamada o método Depositar da classe Conta
        $this->Depositar($Saldo);
        
    }
    
    /**
     * Método destruct
     * Descrição: Destroi/finaliza um objeto
     */
    function __destruct()
    {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada...<br>\n";
    }
    
     /**
      * Nome antigo: Retirar
      * Método Levantar
      * Descrição: permite levantar da conta a quantia $quantia
      */
    function Levantar($quantia)
    {
        if ($quantia > 0)
        {
            $this->Saldo -= $quantia;
        }
    }
    
    /**
     * Método Depositar
     * Descrição: permite depositar na conta
     */
    function Depositar($quantia)
    {
        if ($quantia > 0)
        {
            $this->Saldo += $quantia;
        }
    }
    
    /**
     * Método ObterSaldo
     * Descrição: Obtém o saldo da conta
     */
    function ObterSaldo()
    {
        return $this->Saldo;
    }
}
?>