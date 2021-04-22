<?php
interface DankiInterface
{
    public function getNome();
    public function setNome($nome);
}
 class DankiCode implements DankiInterface{
     private $nome = 'Gessé';
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}

$da = new DankiCode();
$da->setNome("rapaz");
echo $da->getNome();