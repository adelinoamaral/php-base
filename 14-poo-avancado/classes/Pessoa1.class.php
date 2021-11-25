<?php
class Pessoa
{
    // definição das propriedades da classe
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    /**
     * Método: Crescer($centimetros)
     * Descrição: incrementa a altura da pessoa
     */
    function Crescer($centimetros)
    {
        if ($centimetros > 0) {
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

    function ObterIdade($data)
    {
        // Separa em dia, mês e ano
        list($dia, $mes, $ano) = explode('/', $data);
        // Descobre que dia é hoje e devolve em unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Converte para unix timestamp da data de nascimento do fulano
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
        // devolve a idade
        return  floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    }
}
?>