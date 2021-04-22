<?php
$nome = 'Gessé é programador';
//$novoNome = str_replace('rapaz',' gessex ',$nome);
//echo $novoNome;
/*
$novaFrase = substr($nome,0,9);
echo $novaFrase;
*/

$novaFrase = explode(' ',$nome);
//print_r($novaFrase);

$novoNome = implode(' ',$novaFrase);
echo $novoNome;