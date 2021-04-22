<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<?php
/*
 if(isset($_POST['nome']))
 {
     echo "post ". $_POST['nome'];
 }
 else if(isset($_GET['nome']))
 {
     echo "get ". $_GET['nome']; 
 }*/
 if(isset($_POST['acao']))
 {
     /*
     echo "Post " . $_POST['nome'];
     echo "</br>"; 
     echo 'Post ' . $_POST['chave'];
     echo "</br>";
     echo "post " . $_POST['conteudo'];
     */
    echo $_FILES['arquivo']['name']; 
 }
?>
<!--
        <form action=""  method="POST">
            <input type="text" name="nome">
            <input type="hidden" name="chave" value="123456">
            <textarea name="conteudo"></textarea>
            <input type="submit" name="acao" value="Enviar!">
        </form>-->
        <form action="" enctype="multipart/form-data" method="post">
            <input type="file" name="arquivo">
            <input type="submit" name="acao" value="Enviar!">
        </form>
</body>
</html>