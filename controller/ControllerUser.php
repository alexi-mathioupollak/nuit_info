<?php
require_once File::build_path(array("model","ModelUtilisateur.php")); // chargement du modèle

class ControllerUser {

    public static function accueil() {
        $controller='user';
        $view='accueil';
        $pagetitle='SauveteurExpress';
        require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
    }


    public static function register() {
        $pagetitle = 'SauveteurExpress - Inscription';
        $controller='user';
        $view='register';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue



    }

    public static function login() {
        $pagetitle = 'SauveteurExpress - Connexion';
        $controller='user';
        $view='login';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }


      public static function profil() {
        $pagetitle = 'SauveteurExpress - Profil';
        $controller='user';
        $view='login';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }

    public static function deconnexion() {
        $pagetitle = 'SauveteurExpress';
        $controller='user';
        $view='deconnexion';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }



   public static function resetmdp() {
       $controller='user';
       $view='resetmdp';
       $pagetitle='SauveteurExpress - Réinitialiser son mot de passe';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }


   public static function redirectionmdp() {
       $controller='user';
       $view='redirectionmdp';
       $pagetitle='SauveteurExpress';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

   public static function sauveteurs() {
       $controller='user';
       $view='sauveteurs';
       $pagetitle='SauveteurExpress - Sauveteurs';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }


}
?>
