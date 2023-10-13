<?php
 
 require_once "../model/EleveModel.php";
 require_once "../model/DisciplineModel.php";

 class EleveController extends Controller
 {
    private $eleve;
    private $discipline;
    public function __construct()
    {
       $this->eleve= new EleveModel;
       $this->discipline= new DisciplineModel;

    }
    
    public function listeEleve()
    {
        global $id;
        $id= $_GET['id_classe'];
        echo $id;

        $control= $this->eleve->Effectif($id);
        
        $this->render("Eleve", $control);
    }

    public function afficheEleve()
    {
        $this->render("GestionEleve");
    }

    public function inserer()
    {
        $this->eleve->insert('hggh', 'kadia', '2001-01-08', 5, 'ghjkgfd', 'zaerthj', 'externe');
    }

   public function Form1()
   {
     if (isset($_GET['id'])) {
        $niveauId = $_GET['id'];
        $classe= new ClasseModel;
        $classes=$classe->getClasseByNiveauId($niveauId);

        header('content-Type: application/json');
        echo json_encode($classes);
     }
   }


}