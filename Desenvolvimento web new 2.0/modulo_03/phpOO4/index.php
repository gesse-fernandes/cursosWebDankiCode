<?php
abstract class WebSite
{
    public function renderWebSite()
    {
        echo "<h2>WebSite</h2>";
    }
}
 abstract class Aplicacao extends WebSite
 {
     public function __construct($nome)
     {
         echo $nome;
     }
     public function run()
     {
         echo "rodando";
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
 $danki->renderWebSite();