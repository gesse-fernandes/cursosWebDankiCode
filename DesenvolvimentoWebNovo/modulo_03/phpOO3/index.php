<?php
    class Aplicacao
  {
    public function run()
    {
      echo "Rodando";
    }
    public function __construct($nome)
    {
        echo $nome;
    }

 }
 class DankiCode extends Aplicacao
 {
   public function __construct()
   {
     parent::__construct("gessé");
   }

 }
 $danki = new DankiCode();
 echo "</br>";
 $danki->run();