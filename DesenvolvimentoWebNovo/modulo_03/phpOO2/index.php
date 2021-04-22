<?php

class DankiCode
{
    public $nome = 'Gessé';
    public static $contagem = 0;
    private function printNome()
    {
        return  "gessé";    
    }

    public function printNomePublic()
    {
        return $this->nome;
    }
       public static function incrementar()
    {
        self::$contagem++;
    }
    
}
$danki = new DankiCode();
//$danki->nome;
//echo $danki->printNomePublic();
 DankiCode::incrementar();
 DankiCode::incrementar();
echo "</br>" . DankiCode::$contagem;