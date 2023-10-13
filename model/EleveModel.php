<?php

require_once "../model/Model.php";

class EleveModel extends Model
{
    private $eleve;
    public function __construct()
    {
        $this->eleve= new MOdel;
    }

    public function insert($nom, $prenom, $date, $numero, $niveau, $classe, $type)
    {
        $sql = "INSERT INTO Eleve (nom,prenom,dateDeNaissance,numero,niveau,classe,type, id_classe) VALUES ('$nom', '$prenom', '$date', '$numero', '$niveau', '$classe', '$type', 1)";
        echo 'mbam';
        $statement = $this->getPDO()->prepare($sql);
        $statement->execute();
    }
    public function Effectif($id)
    {
        $sql = ("SELECT  Eleve.* FROM Eleve INNER JOIN Classe ON Eleve.id_classe= Classe.id_classe WHERE Classe.id_classe= :id_classe");
        $statement= $this->eleve->getPDO()->prepare($sql);
        $statement->bindValue(':id_classe', $id);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

 
    
}
