<?php

require_once "../model/ConnexionModel.php";
require_once "../model/AnneeModel.php";

class ConnexionController extends Controller
{
    private $connect;
    private $modelAnnee;
    public function __construct()
    {
        $this->connect = new ConnexionModel();
        $this->modelAnnee = new AnneeModel();

        $this->render("Connexion");
    }
   
    // public function connecte()
    // {
    //     if (isset($_POST['connect'])) {
    //         if (!empty($_POST['email']) && !empty($_POST['password']))
    //         {
    //             // Les informations sont correctes, rediriger l'utilisateur vers la page d'accueil
    //             $username=$_POST['email'];
    //             $password=$_POST['password'];
    //             $user=$this->connect->connexion($username, $password);
    //             if (!$user) {
    //                 echo "user n'existe pas";
    //                 return;
    //             }

    //             if ($user) {
    //                 header("location:http://localhost:8081/niveau/afficheNiveau");
    //             }

    //             }
                

    //         }
    //     }

    public function connecte()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $authenticated = $this->connect->authentifier($username, $password);
            if ($authenticated) {
                session_start();

                $_SESSION['success'] = 'Bienvenue';
                $_SESSION['username'] = $username;

                $_SESSION['annee'] = $this->modelAnnee-> getAnneeEnCours()['libelle'];
                header("location:/niveau/afficheNiveau");
                exit();

            } else {
                $_SESSION['error'] = 'Nom d\'utilisateur ou mot de passe invalide.';
                header("Location: /Connexion/connecte");
                exit();
            }

        }
    }
    public function logOut()
    {
        session_destroy();
        header("location:/connexion/connecte");
        exit();
    }

}
   
