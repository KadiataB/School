<?php
require_once "../model/Model.php";

class ClasseModel
{
    private $classe;

    public function __construct()
    {
        $this->classe = new Model;
    }

    public function getAllClasse($id)
    {
        $sql = ("SELECT * FROM Classe JOIN Niveau ON Classe.id_niveau= Niveau.id_niveau WHERE Niveau.id_niveau= :id_niveau");
        $statement= $this->classe->getPDO()->prepare($sql);
        $statement->bindValue(':id_niveau', $id);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
     
    public function getClasseById($id)
    {
        $sql ="SELECT * FROM Eleve WHERE id_classe =$id";
        $statement=$this->classe->getPDO()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
   
    public function getClasseByNiveauId($niveauId)
    {
        $sql = ("SELECT id_classe, libelle FROM Classe  WHERE id_niveau = :id_niveau");
        $statement=$this->classe->getPDO()->prepare($sql);
        $statement->bindValue(':id_niveau', $niveauId);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
 

}