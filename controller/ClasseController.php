<?php

require_once "../model/ClasseModel.php";
require_once "../model/DisciplineModel.php";

class ClasseController extends Controller
{
    private $classe;
    private $discipline;


    public function __construct()
    {
        $this->classe= new ClasseModel;
       $this->discipline= new DisciplineModel;

    }


    public function liste($idClasse)
    {
        global $id;
        $id = $idClasse;
        $control= $this->classe->getClasseById($idClasse);
        $disciplines=$this->discipline->getDiscipline($id);
        $data = [
            'disciplines' => $disciplines,
            'control'      => $control
            
        ];

        $this->render("Eleve", $data);
    }
    
    public function getClasse($id)
    {
       $class= $this->classe->getAllClasse($id);
       echo json_encode($class);
    }
    
    public function coef($id)
    {
        $disciplines=$this->discipline->getDiscipline($id);
        $data = [
            'disciplines' => $disciplines,
            'idClasse'      =>$id
 
        ];
        $this->render("Classe", $data);

    }

    public function update()
    {
      
        $getBody= file_get_contents('php://input');
        $body= json_decode($getBody, true);

        print_r($body['tab'][0]['id_discipline']);
        print_r($body['tab'][0]['note']);
        print_r($body['tab'][1]['note']);
        print_r($body['tab'][0]['id_classe']);

        $idclasse=$body['tab'][0]['id_classe'];
        $iddiscipline=$body['tab'][0]['id_discipline'];
        $ressource=$body['tab'][0]['note'];
        $examen=$body['tab'][1]['note'];
        $this->discipline->updateNote($idclasse, $iddiscipline, $ressource, $examen);
    }


    public function supprimer()
    {
        $getBody= file_get_contents('php://input');
        $body= json_decode($getBody);
        $id = $body->id;
       
         $this->discipline->supp($id);
    }

    public function afficheNote()
    {
       $getbody= file_get_contents(('php://input')) ;
       $body= json_decode($getbody);

       $this->discipline->getNoteMax();
    }
}

