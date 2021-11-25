<?php
class Pessoa
{
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;
    
    /**
     * Método:
     * Descrição: inicializa as propriedades da classe
     */
    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }
    
    /**
     * Método: __destruct()
     * Descrição: finaliza o objeto
     */
    function __destruct()
    {
        echo "Objeto {$this->Nome} finalizado...<br>\n";
    }
    
    /**
     * Método: Crescer($centimetros)
     * Descrição: incrementa a altura da pessoa
     */
    function Crescer($centimetros)
    {
        if ($centimetros > 0)
        {
            $this->Altura += $centimetros;
        }
    }


     /**
      * Método:Formar($titulacao)
      * Descrição: altera a escolaridade da pessoa
      */
    function Formar($titulacao)
    {
        $this->Escolaridade = $titulacao;
    }
    
}
?>