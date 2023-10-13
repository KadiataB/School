<?php
 
 require_once "../model/NiveauModel.php";
 class NiveauController extends Controller
 {
    private $niveau;
    public function __construct()
    {
       $this->niveau= new NiveauModel;

    }

    public function afficheNiveau()
    {
        $control = $this->niveau->getAllNiveau();
        $this->render("GestionNiveau", $control);
    }

    public function getNiveau()
    {
      $niv= $this->niveau->getAllNiveau();
      echo json_encode($niv);
    }

    public function addNiveau()
    {
       if (isset($_POST['niveau'])){
          $niveau= $_POST['niveau'];
         $this->niveau->insert($niveau);
      }
      header('location:http://localhost:8081/niveau');
    }

    public function classe($idNiveau)
    {
     $niv= $this->niveau->getNiveauById($idNiveau);
     $this->render("ClasseElementaire", $niv);
    }
    
 }