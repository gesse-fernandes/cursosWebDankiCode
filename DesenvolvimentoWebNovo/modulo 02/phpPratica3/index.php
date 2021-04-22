<?php
function olaMundo()
{
    echo "Olá mundo";
}
function somar($n1,$n2)
{
    return $n1+$n2;
}
function verificaNome($nome)
{
    if($nome == 'Gesse')
    {
        return true;
    }
    else{
        return false;
    }
}
olaMundo();
echo "</br>";
echo somar(5,5);
if(verificaNome('a'))
{
    echo " verdade";
}
