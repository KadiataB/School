<?php

class Model
{
    private static $pdo;

    public function __construct()
    {
        try {
            static::$pdo = new \PDO("mysql:host = localhost;dbname=Gestion_Ecole", 'root', 'Dieynaba@08', [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e) {
            echo "</br> erreurDeConnexion: " . $e->getMessage();
            exit();
        }
       }
   public function getPDO()
       {
           return static::$pdo;
       }
    }
