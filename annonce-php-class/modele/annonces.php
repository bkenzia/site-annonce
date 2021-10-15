<?php
require_once('config/bdd.php');

/**
 * Modèle des articles
 */
class modeleAnnonces {

    /**
     * Construction de la class controleurArticles
     */
    function __construct() {
        $this->bdd = new BDD();
    }

    /**
     * Récupération des articles
     */
    function annonces() {
        // Requête SQL des annonces
        $annonces = $this->bdd->connexion()->query("SELECT * FROM annonces ORDER BY id DESC");
        
        return $annonces;
    }

    /**
     * Récupération d'article par id
     */
    function annoncesParId($id) {
        // Requête SQL des articles
        $annonces = $this->bdd->connexion()->query("SELECT * FROM annonces WHERE id = $id");

        return $annonces;
    }

    /**
     * Publication d'un article
     */
    function publierAnnonces($post, $nomImage) {

        // Requête SQL des articles
        $nom=$post['nom'];
        $prix=$post['prix'];
        $image=$nomImage;
        $categories=$post['categories'];
        $adresse=$post['adresse'];
        $date=date("d/m/y");
        


        $annonces = $this->bdd->connexion()->query("INSERT INTO annonces (nom, prix, image, date, categories, adresse) VALUES ('$nom','$prix','$image','$date', '$categories', '$adresse')");

        echo"l'annonce est ajoutée";
    }

    function recherche($recherche){
        $rechercheResult = $this->bdd->connexion()->query("SELECT *  FROM annonces WHERE nom LIKE '%$recherche%' OR categories LIKE '%$recherche%' LIMIT 10");
        
        return $rechercheResult;
    }
}