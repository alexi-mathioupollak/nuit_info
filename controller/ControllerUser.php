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
        $view='profil';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }

    public static function deconnexion() {
        $pagetitle = 'SauveteurExpress';
        $controller='user';
        $view='deconnexion';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }

      public static function missions() {
        $pagetitle = 'SauveteurExpress - Missions';
        $controller='user';
        $view='missions';
        require File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
        
  }



   public static function resetmdp() {
       $controller='user';
       $view='resetmdp';
       $pagetitle='SauveteurExpress - Réinitialiser son mot de passe';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

      public static function createpage() {
       $controller='user';
       $view='wikicreator';
       $pagetitle='SauveteurExpress - Créer une page';
       require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

      public static function wikipage() {
       $controller='user';
       $view='wikipage';
       $pagetitle='SauveteurExpress - Wiki';
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

   public static function resetpseudo(){
    $controller='user';
    $view='resetpseudo';
    $pagetitle='SauveteurExpress - Changer de Pseudo';
    require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

   public static function resetemail(){
    $controller='user';
    $view='resetemail';
    $pagetitle='SauveteurExpress - Changer de Adresse Email';
    require_once File::build_path(array("view","view.php")); ;  //"redirige" vers la vue
   }

   public static function deletedaccount() {
        $controller='user';
        $view='deleteaccount';
        $pagetitle='SauveteurExpress - Suppression';
        require_once File::build_path(array("view", "view.php")); //"redirige" vers la vue

        $sql = "DELETE FROM NDI__User WHERE id = :id";
        $values = array("id" => $_SESSION['id']);
        $req_prep = Model::getPDO()->prepare($sql);
        $req_prep->execute($values);
        session_destroy();
   }

   public static function downloaded() {
       // pour télécharger ses données personnelles
       // ATTENTION : le serveur de l'IUT n'envoit les mails qu'aux adresses jetables yopmail, il faudra s'en créer une pour tester

        $controller='user';
        $view='download';
        $pagetitle='SauveteurExpress - Réception données';
        require_once File::build_path(array("view", "view.php")); //"redirige" vers la vue

        $reqtoken = Model::getPDO()->prepare("SELECT * FROM NDI__User WHERE email = :email");
        $reqtoken->execute(array('email' => $_SESSION['email']));
        $reqtoken = $reqtoken->fetch();

        $mailconf = $reqtoken['email'];


        $header = "From: NuitExpress <tristan.gaido.pro@gmail.com>\n";
        $header .= "MIME-version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\n";
        $header .= "Content-Transfer-ncoding: 8bit";

        $contenu = '<p>Bonjour ' . $reqtoken['pseudo'] . ',</p><br>
                    <p>Voici les données de votre compte qui sont enregistrées dans notre base de données :<p>' 
                    . 'Pseudo : ' . $reqtoken['pseudo'] . '<br />'
                    . 'Email : ' . $reqtoken['email'] . '<br />'
                    . 'Date de création : ' . $reqtoken['date_creation'] . '<br />';
        mail($mailconf, 'Vos donnees personnelles', $contenu, $header);
   }


}
?>