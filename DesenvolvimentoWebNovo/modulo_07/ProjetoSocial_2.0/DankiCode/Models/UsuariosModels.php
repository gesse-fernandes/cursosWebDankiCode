<?php

namespace dankiCode\Models;


class UsuariosModels{
    public static function emailExists($email)
    {
        $pdo = \dankiCode\Mysql::connect();
        $veri = $pdo->prepare("SELECT  email from usuarios where email = ?");
        $veri->execute(array($email));

        if ($veri->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }
        public static function listarComunidade()
        {
            $pdo =\dankiCode\Mysql::connect();
            $comunidade = $pdo->prepare("SELECT * FROM usuarios");
            $comunidade->execute();
            return $comunidade->fetchAll();
        }

        public static function solicitarAmizades($idPara){
                $pdo = \dankiCode\Mysql::connect();
                $verificaAmizade = $pdo->prepare("SELECT * FROM  amizades where (enviou = ? and recebeu = ?) or (enviou = ? and recebeu = ?) ");
                $verificaAmizade->execute(array($_SESSION['id'],$idPara,$idPara,$_SESSION['id']));
                if($verificaAmizade->rowCount() == 1){
                    return false;
                }else{
                    $insert = $pdo->prepare("INSERT INTO amizades  values(null,?,?,0)");
                    if(
                    $insert->execute(array($_SESSION['id'],$idPara)))
                    {
                        return true;
                    }                   
                }
                return true;
        }
        public static function existePedidoAmizade($idPara)
        {
            $pdo =\dankiCode\Mysql::connect();
            $verificaAmizade = $pdo->prepare("SELECT * FROM amizades where (enviou = ? and recebeu = ?) or (enviou = ? and recebeu = ?)");
            $verificaAmizade->execute(array($_SESSION['id'],$idPara,$idPara,$_SESSION['id']));
            if($verificaAmizade->rowCount() == 1)
            {
                return false;
            }else{
                return true;
            }
        }
    
}