<?php
 
 require_once "../model/DisciplineModel.php";
 require_once "../controller/ClasseController.php";

 class DisciplineController extends Controller
 {
    private $discipline;
    public function __construct()
    {
       $this->discipline= new DisciplineModel;
    }

    public function gestion()
    {
        $this->discipline->recupDiscipline(1);
        $this->render("GestionDiscipline");
    }

    public function getDiscipline($id)
    {
        $disciplin= $this->discipline->recupDiscipline($id);
        echo json_encode($disciplin);
    }

    public function inserer($libelle, $idClasse, $idGroupe, $code)
    {
        $dis= $this->discipline->insert($libelle, $code, $idGroupe);

        if ($dis!='null') {
             $this->discipline->insertDiscipline($idClasse, $dis);
        }
    }

    public function selectGroupe()
    {
        $group = $this-> discipline->recupGroupe();
        echo json_encode($group);
    }
    
    public function addDiscipline()
    {
        $getBody= file_get_contents('php://input');
        $body= json_decode($getBody);
        $idDiscipline= $this->discipline->insert($body->libelle, $body->code, $body->groupe);

        $this->discipline->insertDiscipline($body->classe, $idDiscipline);
    }

     
    public function updat()
    {
        
        $getBody= file_get_contents('php://input');
        $body= json_decode($getBody, true);
        foreach ($body['discipline'] as $key) {
           $this->discipline->updateEtat($key);
        }
    }
    
    public function insert()
    {
        $getBody= file_get_contents('php://input');
        $body= json_decode($getBody);
        $this->discipline->insertGroupe($body->libelle);
    }

    public function recupeCode($code)
    {
       echo json_encode($this->discipline->recupCode($code));
    }
}