<?php
require_once "../controller/Controller.php";
class Router
{
    public function __construct()
    {
        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
        //substr() permet de supprimer le premier et le dernier caractère d'une chaine
        
        $uri = substr($uri, 1);
        // echo $uri . '</br>';

        $link = explode('/', $uri);
        // var_dump($link[0]);
        if (isset($link[0]) && $link[0]) {

      } else {
            $link[0] = 'Connexion';
            $filename = '../controller/' . ucfirst(strtolower($link[0])) . 'Controller.php';
            require_once $filename;
            $controller = ucfirst(strtolower($link[0])) . "Controller";
            $controller = new $controller;
        }
        $filename = '../controller/' . ucfirst(strtolower($link[0])) . 'Controller.php';
        //tester si l'action existe
        require_once $filename;
        $controller = ucfirst(strtolower($link[0])) . "Controller";
        $controller = new $controller;
        if (isset($link[1]) && $link[1]) {
            $method=$link[1];
 
            // require_once $filename;
            // //instancier le controller
            // $controller = ucfirst(strtolower($link[0])) . "Controller";
            // $controller = new $controller;
            array_shift($link);
            array_shift($link);
            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], $link);
            }
            } else {
        
            call_user_func([$controller, "afficheNiveau"], []);
              
        }
        //  echo $link[0];
        //file_exixts($filename) permet de vérifier si le controller exist
        //ucfirst() permet de convertir la premiere lettre en majuscule
        //strtolower() permet de convertir en miniscule

       
        
        }
    }
    
