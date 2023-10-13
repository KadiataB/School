<?php

require_once "../model/AnneeModel.php";


class AnneeController extends Controller
{
    private $modelAnnee;

    private $direction = "http://localhost:8081/Annee/affichAnnee";



    public function __construct()
    {
        $this->modelAnnee = new AnneeModel();

    }

    public function affichAnnee()
    {
        $control = $this->modelAnnee->getAllAnnee();
        $this->render("GestionAnnee", $control);
    }
    public function addAnnee()
    {
        if (isset($_POST['annee']) && isset($_POST['ok'])) {
            $annee = $_POST['annee'];
            var_dump($annee);
            $annees = explode('-', $annee);
            $debut = intval($annees[0]);
            $fin = intval($annees[1]);
            if ((preg_match('/^\d{4}-\d{4}$/', $annee)) && ($this->calcul($debut, $fin)) && !$this->modelAnnee->research($annee)) {
                echo "b";
                $this->modelAnnee->insert($annee);
            }
        }
        header("location:$this->direction");
    }

    public function calcul($debut, $fin)
    {
        if ($fin - $debut === 1) {
            return true;
        }
        return false;
    }

    public function suppAnnee()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->modelAnnee->supp($id);
            header("location:$this->direction");
        }
    }

    public function modifiAnnee()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idAnnee = $_POST['id_annee'];
            $annee = $_POST['annee'];
            $annees = explode('-', $annee);
            $debut = intval($annees[0]);
            $fin = intval($annees[1]);
            if ((preg_match('/^\d{4}-\d{4}$/', $annee)) && ($this->calcul($debut, $fin) == "true") && !$this->modelAnnee->research($annee)) {
                $this->modelAnnee->update($idAnnee, $annee);
            }
            header("location:$this->direction");
        }
    }

    public function desactiAnnee()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo $id;
            $this->modelAnnee->modifEtatAnnee($id, 0);
            header("location:$this->direction");

        }
    }
    public function actiAnnee()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo $id;
            $idAnneeActif = $this->modelAnnee->research_etat()["id_AnneeScolaire"];
            $this->modelAnnee->modifEtatAnnee($idAnneeActif, 0);
            $this->modelAnnee->modifEtatAnnee($id, 1);
            header("location:$this->direction");

        }
    }
}