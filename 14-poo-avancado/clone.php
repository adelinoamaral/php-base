<?php
class Cao
{
    public $coleira, $nome, $idade, $raca;
    
    # m�todo construtor
    function __construct($coleira, $nome, $idade, $raca)
    {
        $this->coleira = $coleira;
        $this->nome     = $nome;
        $this->idade    = $idade;
        $this->raca     = $raca;
    }
    
    function __clone()
    {
        $this->coleira = $this->coleira +1;
        $this->nome   .= ' Junior';
        $this->idade    = 0;
    }
}

$toto = new Cao(100, 'Tot�', 10, 'Fox Terrier');
$vava = clone $toto;

echo 'C�digo: ' . $toto->coleira . "<br>\n";
echo 'Nome:     ' . $toto->nome    . "<br>\n";
echo 'Idade:    ' . $toto->idade   . " anos <br>\n";
echo "<br>\n";
echo 'C�digo: ' . $vava->coleira . "<br>\n";
echo 'Nome:     ' . $vava->nome    . "<br>\n";
echo 'Idade:    ' . $vava->idade   . " anos <br>\n";
?>