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
      * Nome antigo: Retirar
      * Método Levantar
      * Descrição: permite levantar da conta a quantia $quantia
      */
    function Levantar($quantia)
    {
        // não pode levantar sem existir um saldo positivo
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
        // Um deposito tem que ter um valor psitivo
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