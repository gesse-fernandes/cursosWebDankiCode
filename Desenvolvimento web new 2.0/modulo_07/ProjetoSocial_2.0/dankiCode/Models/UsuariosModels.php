<?php

namespace dankiCode\Models;


class UsuariosModels{
    public static function emailExists($email)
    {
        $pdo = \dankiCode\Mysql::connect();
        $veri = $pdo->prepare("SELECT  email from usuarios where email = ?");
        $veri->execute(array($email));

        if($veri->rowCount() == 1)
        {
            return true;


        }
        else{
            return false;
        }
    } 
}