<?php
require_once "../model/Model.php";
class NiveauModel extends Model
{
    private $niv;

    public function __construct()
    {
       $this->niv= new Model;
    }
       
    public function getAllNiveau():array
    {
          $statement = $this->niv->getPDO()->query("SELECT * FROM Niveau");
          return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        
    public function insert($niveau)
    {
        echo 'ok';
        $sql = "INSERT INTO Niveau (libelle) VALUES ('$niveau')";
        $statement = $this->getPDO()->prepare($sql);
        $statement->execute();
    }
    
    public function getNiveauById($id)
    {
        $sql ="SELECT * FROM Classe WHERE id_niveau =$id";
        $statement=$this->getPDO()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getsemestre($id)
    {
        $sql ="SELECT * FROM semestre WHERE id_niveau= $id";
        $statement=$this->getPDO()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    
}
