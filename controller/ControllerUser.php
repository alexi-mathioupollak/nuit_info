<?php
require_once File::build_path(array("model","ModelUtilisateur.php")); // chargement du modèle

class ControllerUser {

    public static function accueil() {
        $controller='user';
        $view='accueil';
        $pagetitle='PollExpress';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }


    public static function register() {
        $pagetitle = 'PollExpress - Inscription';
        $controller='user';
        $view='register';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue



    }

    public static function login() {
        $pagetitle = 'PollExpress - Connexion';
        $controller='user';
        $view='login';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }

    public static function deconnexion() {
        $pagetitle = 'Déconnexion';
        $controller='user';
        $view='deconnexion';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }



   public static function resetmdp() {
       $controller='user';
       $view='resetmdp';
       $pagetitle='PollExpress - Réinitialiser son mot de passe';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }


   public static function verifmail() {
       $controller='user';
       $view='verifmail';
       $pagetitle='PollExpress';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   } 

   public static function redirectionmail() {
       $controller='user';
       $view='redirectionmail';
       $pagetitle='PollExpress';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

   public static function redirectionmdp() {
       $controller='user';
       $view='redirectionmdp';
       $pagetitle='PollExpress';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }
       public static function achatItem() {
       $liste_sondage = ModelUtilisateur::getAllSondages();
       $controller='user';
       $view='achatItem';
       $pagetitle='PollExpress';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
       
       
   }

}
?>
