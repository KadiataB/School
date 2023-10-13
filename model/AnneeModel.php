<?php
require_once "../model/Model.php";
class AnneeModel extends Model
{

    private $connect;
    
    public function __construct()
    {
       $this->connect= new Model;
    }
         
    
    public function getAllAnnee():array
    {
      $statement = $this->connect->getPDO()->query("SELECT * FROM AnneeScolaire");
    
       return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function insert($annee)
    {
        $sql = "INSERT INTO AnneeScolaire (libelle,status) VALUES ('$annee', 0)";
        $statement =$this->getPDO()->prepare($sql);
        $statement->execute();

    }
    public function supp($id)
    {
       $sql= "DELETE FROM AnneeScolaire  WHERE id_AnneeScolaire = :id";
       $statement= $this->getPDO()->prepare($sql);
       print_r($statement);
       $statement->bindValue(':id', $id);
       $statement->execute();
    }

    public function research($annee)
    {
        $sql= 'SELECT libelle FROM AnneeScolaire WHERE libelle = :libelle';
        $statement= $this->getPDO()->prepare($sql);
        $statement->bindValue(':libelle', $annee);
        $statement->execute();
        if ($statement->fetch(PDO::FETCH_ASSOC)) {
            return true;
        }
        return false;
    }
    public function update($id, $annee)
    {
        $sql= "UPDATE AnneeScolaire SET libelle = :libelle WHERE id_AnneeScolaire = :id_AnneeScolaire";
        $statement = $this->getPDO()->prepare($sql);
        $statement->bindValue(':libelle', $annee);
        $statement->bindValue(':id_AnneeScolaire', $id);
        $statement->execute();
      
    }
    public function modifEtatAnnee($id, $etat)
    {
        $sql= "UPDATE AnneeScolaire SET status = :etat WHERE id_AnneeScolaire = :id_AnneeScolaire";
        $statement = $this->getPDO()->prepare($sql);
        $statement->bindValue(':etat', $etat);
        $statement->bindValue(':id_AnneeScolaire', $id);
        $statement->execute();
      
    }
    public function research_etat()
    {
        $sql= 'SELECT id_AnneeScolaire FROM AnneeScolaire WHERE status= 1';
        $statement= $this->getPDO()->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC)[0];
       
    }
    public function getAnneeEnCours()
    {
        $query = "SELECT libelle FROM AnneeScolaire WHERE status = 1";
        $statement = $this->getPDO()->prepare($query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}