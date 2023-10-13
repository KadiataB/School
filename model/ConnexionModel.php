<?php
require_once "../model/Model.php";

class ConnexionModel  extends Model
{
    private $connect;

    public function __construct()
    {
        $this->connect=new Model();
    }
 
//    public function connexion($email, $password)
//    {
//     $sql= "SELECT * FROM utilisateur WHERE email=:email AND password=:password";
//     $statement=$this->connect->getPDO()->prepare($sql);
//     $statement->bindValue(':email', $email);
//     $statement->bindValue(':password', $password);
//     $statement->execute();
//     return $statement->fetch(PDO::FETCH_ASSOC);

//    }

   public function authentifier($username, $password)
    {
        $query = "SELECT username, password FROM utilisateur WHERE username = :username";
        $stmt = $this->getPDO()->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && $admin['password'] === $password){
            return true;
        } else {
            return false;
        }
    }
}