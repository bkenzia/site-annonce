<?php
class BDD {

    function __construct() {
        $this->acces = [];
    }

    /**
     * Authentification à la bdd
     */
    private function authentification() {

        try{
            $connexion = new PDO("mysql:host=" . $this->acces['adresseBdd'] . ";dbname=" . $this->acces['bdd'] . ";charset=utf8", $this->acces['utilisateurBdd'], $this->acces['mdpBdd']);
        }
        catch(PDOException $erreur) {

            // Affichage du message d'erreur
            echo "Erreur : " . $erreur->getMessage();

            // header("Location: 500");
        }

        return $connexion;
    }
 
    /**
     * Enregistrement des accès à la bdd
     */
    private function acces() {

        // Enregistrement des informations dans la classe
        $this->acces['adresseBdd'] = "localhost:3306";
        $this->acces['utilisateurBdd'] = "root";
        $this->acces['mdpBdd'] = "root";
        $this->acces['bdd'] = "boncoin";

        // Authentification
        $authentification = $this->authentification();

        return $authentification;
    }

    /**
     * Connexion à la bdd
     */
    function connexion() {

        // Enregistrement des accès
        $connexion = $this->acces();

        return $connexion;
    }
}