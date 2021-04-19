<?php

namespace dankiCode;
use Exception;

class Mysql{
    private static $pdo;

        public static function connect(){
        if(self::$pdo == null){
                try {
                    self::$pdo = new \PDO("mysql:host=localhost;dbname=rede_social_curso_devweb2;","root","",array(\PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
                    self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                } catch (Exception $th) {
                    echo "erro ao se conectar";
                    error_log($th->getMessage());
                }
                return self::$pdo; 
        }
        return self::$pdo;
        
        }
}