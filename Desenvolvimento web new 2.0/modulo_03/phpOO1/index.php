<?php
  class DankiCode
  {
    public $nome = "rapaz";
     function __construct($nome)
     {
         echo $nome . "</br>";
     } 
     public function printNome()
     {
       return "gessé";
     }
  }

 $danki =new DankiCode("bem vindo");
 echo $danki->printNome();
 echo "</br>" . $danki->nome;
  