<?php
$nome = array('Gesse', 'Gessex', 'gess');
//echo $nome['nome1'];

print_r($nome);
/*
foreach ($nome as $item => $campo) {
    echo "<pre>";
    echo $item;
    echo "</br>";
    echo $campo;
    echo "</pre>";
}*/
/*
for ($i=0; $i < sizeof($nome) ; $i++) {
    echo "</br>";
    echo $nome[$i];
    echo "</br>";
}*/
$i = 0;
while ($i < sizeof($nome)) {
    echo "</br>";
    echo $nome[$i];

    $i++;
}
