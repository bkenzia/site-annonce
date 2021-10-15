<?php

require 'controleur/annonces.php';

class routeur {

    function __construct() {
        $this->controleurAnnonces = new controleurAnnonces();
        $this->urlsAutorisees = [
            "",
            "accueil",
            "article",
            "publier",
            
        ];
    }

    private function routes() {

        // Récupération de l'url de la page
        $url = explode('/', $_SERVER['REQUEST_URI'])[3];
        $root="/MVC/annonce-php-class/";
       
       
        

        // Si l'url est autorisée
        if(in_array($url, $this->urlsAutorisees)) {

            
            if($url == "accueil") {
                
                if( isset($_POST["submit-recherche"])){
                   
                    $rechercheResult= $this->controleurAnnonces->controleurRecherche($_POST)[0];
                  
                    $valid=$this->controleurAnnonces->controleurRecherche($_POST)[1];
                   
                    require 'vue/accueil.php';
                }else{
                    $annonces = $this->controleurAnnonces->annonces();
                    $valid=false;
                    
                    require 'vue/accueil.php'; 
                }
                
                
            }
            else if($url == "article") {
                
                $annonces = $this->controleurAnnonces->annoncesParId($_GET['id']);
                
               
                require 'vue/article.php';
            }
            else if($url == "publier") {
                
                // $annonces = $this->controleurAnnonces->annoncesParId($_GET['id']);
                
                $publierAnnonce = $this->controleurAnnonces->publierAnnonces($_POST, $_FILES);
                
                require 'vue/publierAnnonce.php';
            }
            else {
                
                if(isset($_POST["submit-recherche"])){
                   
                    $rechercheResult= $this->controleurAnnonces->controleurRecherche($_POST)[0];
                  
                    $valid=$this->controleurAnnonces->controleurRecherche($_POST)[1];
                   
                    
                    
                    // $valid=$this->controleurRecherche($_POST)[1];
                    
                    require 'vue/accueil.php';
                }else{
                    $annonces = $this->controleurAnnonces->annonces();
                    $valid=false;
                    
                    require 'vue/accueil.php'; 
                }
                // $annonces = $this->controleurAnnonces->annonces();
               
                // require 'vue/accueil.php';
            }
        }
        else {

            require 'vue/404.php';
        }
    }

    function affichageVues() {

        $this->routes();
    }
}