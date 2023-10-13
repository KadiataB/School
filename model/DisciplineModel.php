<?php

require_once "../model/Model.php";

class DisciplineModel extends Model
{
    private $discipline;
    public function __construct()
    {
        $this->discipline = new MOdel;
    }

    public function recupDiscipline($id)
    {
        $sql = ("SELECT * FROM Discipline, discipline_classe,Classe  WHERE discipline_classe.id_classe=Classe.id_classe AND discipline_classe.id_discipline=Discipline.id AND discipline_classe.id_classe=:id_classe AND discipline_classe.etat=1");
        $statement = $this->discipline->getPDO()->prepare($sql);
        $statement->bindValue(':id_classe', $id);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }


    public function insert($libelle, $code, $idGroupe)
    {
        $sql = "INSERT INTO Discipline (libelle, code_discipline, id_groupe) VALUES ('$libelle', '$code', $idGroupe)";
        $statement = $this->getPDO()->prepare($sql);
        $statement->execute();
        return $this->getPDO()->lastInsertId();
    }
    public function insertDiscipline($idClasse, $idDiscipline)
    {
        $sql = "INSERT INTO  discipline_classe (id_classe, id_discipline) VALUES ('$idClasse', '$idDiscipline')";
        $statement = $this->getPDO()->prepare($sql);
        $statement->execute();
    }

    public function recupGroupe()
    {
        $sql = "SELECT * FROM groupe_discipline";
        $statement = $this->getPDO()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateEtat($id)
    {
        $sql = "UPDATE discipline_classe SET etat=0 WHERE id_discipline=:id_discipline";
        $statement = $this->getPDO()->prepare($sql);
        $statement->bindParam(':id_discipline', $id);
        $statement->execute();
    }

    public function insertGroupe($libelle)
    {
        $sql = "INSERT INTO groupe_discipline (libelle) VALUES ('$libelle')";
        $statement = $this->getPDO()->prepare($sql);
        $statement->execute();
    }

    public function recupCode($code)
    {
        $sql = "SELECT code_discipline FROM `Discipline` WHERE code_discipline LIKE '$code%'";
        $statement = $this->getPDO()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getDiscipline($id)
    {
        $sql = ("SELECT * FROM Discipline, discipline_classe,Classe  WHERE discipline_classe.id_classe=Classe.id_classe AND discipline_classe.id_discipline=Discipline.id AND discipline_classe.id_classe=:id_classe");
        $statement = $this->discipline->getPDO()->prepare($sql);
        $statement->bindValue(':id_classe', $id);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }


    public function updateNote($idclasse, $iddiscipline, $ressource, $examen)
    {
        $sql = "UPDATE discipline_classe SET  ressource = :ressource, examen = :examen WHERE id_classe = :id_classe AND id_discipline = :id_discipline";
        $statement = $this->getPDO()->prepare($sql);
        $statement->bindValue('id_classe', $idclasse);
        $statement->bindValue('id_discipline', $iddiscipline);
        $statement->bindValue('ressource', $ressource);
        $statement->bindValue('examen', $examen);
        $statement->execute();
    }

    public function supp($id)
    {
        $sql = "DELETE FROM discipline_classe  WHERE id = :id";
        $statement = $this->getPDO()->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

    public function getNoteMax($idclasse, $iddiscipline)
    {
        $sql = "SELECT * FROM discipline_classe WHERE discipline_classe.id_classe=:id_classe AND discipline_classe.id_dicipline=:id_discipline";
        $statement = $this->getPDO()->prepare($sql);
        $statement->bindValue(':id_classe', $idclasse);
        $statement->bindValue(':id_discipline', $iddiscipline);
        $statement->execute();
    }
    

}