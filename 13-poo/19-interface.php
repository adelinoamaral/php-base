<?php
# interface Crud
# Permite criar um modelo para ser usado por outras classes
interface Crud
{
    public function create();
    public function Read($id);
    public function update($id);
    public function delete($id);
}


# Na classe Noticia temos de definir os métodos referidos na interface
class Noticia implements Crud
{
    public function create()
    {
        echo "Cria";
    }
    public function Read($id)
    {
        echo "Lê " . $id;
    }
    public function update($id)
    {
        echo "Atualiza " . $id;
    }
    public function delete($id)
    {
        echo "Apaga " . $id;
    }
}

# instancia novo Aluno
$joaninha = new Noticia();

# chama métodos quaisquer
$joaninha->Read('Joana Maranhao');

?>