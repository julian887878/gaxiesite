<?php

class GestionAdmin {

    // <editor-fold defaultstate="collapsed" desc="région Champs">
    /**
     * Objet de la classe PDO
     * @var PDO
     */
    private static $pdoCnxBase = null;

    /**
     * Objet de la classe PDOStatement
     * @var PDOStatement
     */
    private static $pdoStResults = null;
    private static $requete = ""; //texte de la requete 
    private static $resultat = null; //resultat de la requete 

    // </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="région Méthode statiques">
    /**
     * Permet de se connecter à la base de données 
     */
    public static function seConnecter() {
        if (!isset(self::$pdoCnxBase)) { //S'il n'y a pas encore eu de connexion
            try {
                self::$pdoCnxBase = new PDO('mysql:host=' . MySqlConfig::SERVEUR . ';dbname=' . MySqlConfig::BASE, MySqlConfig::UTILISATEUR, MySqlConfig::MOT_DE_PASSE);

                self::$pdoCnxBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdoCnxBase->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                self::$pdoCnxBase->query("SET CHARACTER SET utf8");
            } catch (Exception $ex) {
                //l'objet pdoCnxBase a généré automatiquement un objet de type exeption 
                echo 'Erreur : ' . $ex->getMessage() . '<br/>'; //Méthode de la classe exception 
                echo 'Code : ' . $e->getCode(); //méthode de la classe exception
            }
        }
    }

    public static function seDeconnecter() {
        self::$pdoCnxBase = null;
        //Si on n'appelle pas la méthode, la déconnecion a lieu en fin de script
    }

    // </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="région utilisateurs">
    /**
     * Permet de se connecter à la base de données 
     */
    public static function ajoutUsers($nomUtilisateur, $prenomUtilisateur, $emailUtilisateur, $telUtilisateur, $mdpUtilisateur, $posteUtilisateur) {
        self::seConnecter();

        self::$requete = "INSERT INTO utilisateur (nomUtilisateur,prenomUtilisateur,emailUtilisateur,telUtilisateur,mdpUtilisateur,posteUtilisateur) values ('$nomUtilisateur','$prenomUtilisateur','$emailUtilisateur','$telUtilisateur','$mdpUtilisateur','$posteUtilisateur')";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('nomUtilisateur', $nomUtilisateur);
        self::$pdoStResults->bindValue('prenomUtilisateur', $prenomUtilisateur);
        self::$pdoStResults->bindValue('emailUtilisateur', $emailUtilisateur);
        self::$pdoStResults->bindValue('telUtilisateur', $telUtilisateur);
        self::$pdoStResults->bindValue('mdpUtilisateur', $mdpUtilisateur);
        self::$pdoStResults->bindValue('posteUtilisateur', $posteUtilisateur);

        self::$pdoStResults->execute();
    }

    public static function getMailDernierUser() {
        self::seConnecter();

        self::$requete = "SELECT emailUtilisateur FROM utilisateur ORDER BY idUtilisateur DESC";

        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->execute();

        self::$resultat = self::$pdoStResults->fetch();

        return self::$resultat->email;
    }

    public static function getConnectionUser($emailUtilisateur, $mdpUtilisateur) {
        self::seConnecter();



        self::$requete = "SELECT count(*) AS nbUsers FROM utilisateur WHERE emailUtilisateur='$emailUtilisateur' and mdpUtilisateur='$mdpUtilisateur'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('emailUtilisateur', $emailUtilisateur);
        self::$pdoStResults->bindValue('mdpUtilisateur', $mdpUtilisateur);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        if (self::$resultat->nbUsers == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function getUserByMail($emailUtilisateur) {

        self::seConnecter();
        self::$requete = "SELECT * FROM utilisateur WHERE emailUtilisateur='$emailUtilisateur'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }

    public static function verifMail($emailUtilisateur) {

        self::seConnecter();
        self::$requete = "SELECT count(emailUtilisateur) as 'NbMail' from utilisateur where emailUtilisateur = '$emailUtilisateur'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }

    public static function isAdminOK($emailUtilisateur, $mdpUtilisateur) {
        self::seConnecter();

        self::$requete = "SELECT * FROM utilisateur WHERE emailUtilisateur=:emailUtilisateur and mdpUtilisateur=:mdpUtilisateur";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->bindValue('emailUtilisateur', $emailUtilisateur);
        self::$pdoStResults->bindValue('mdpUtilisateur', $mdpUtilisateur);
        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        if ((self::$resultat != null) and ( self::$resultat->isAdmin))
            return true;
        else
            return false;
    }
    
        public static function getUtilisateur() {

        self::seConnecter();
        self::$requete = "SELECT * FROM utilisateur";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
               public static function supprimerUtilisateur($idUtilisateur) {
        try {
            self::seConnecter();

            self::$requete = "DELETE FROM utilisateur WHERE idUtilisateur=:idUtilisateur";
            self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

            self::$pdoStResults->bindValue('idUtilisateur', $idUtilisateur);
            self::$pdoStResults->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    

//  </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="région QUI SOMMES NOUS">
    /**
     * Permet de se connecter à la base de données 
     */
    
    public static function getOngletCategorie() {

        self::seConnecter();
        self::$requete = "SELECT * FROM quisommesnous_ongletCategorie";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }

        public static function getOngletResume() {

        self::seConnecter();
        self::$requete = "SELECT * FROM quisommesnous_resume";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }

    public static function getOngletSousCategorieByCategorie($id) {

        self::seConnecter();
        self::$requete = "SELECT * FROM quisommesnous_ongletSousCategorie WHERE idCategorie='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }

    public static function getOngletSousCategorieByidSousCategorie($id) {

        self::seConnecter();
        self::$requete = "SELECT * FROM quisommesnous_ongletSousCategorie WHERE id='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }

        public static function getOngletSousCategorie() {

        self::seConnecter();
        self::$requete = "SELECT * FROM quisommesnous_ongletSousCategorie";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
    public static function getCategorie() {

        self::seConnecter();
        self::$requete = "SELECT * FROM quisommesnous_ongletCategorie";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }

    public static function modifTitreCategorie($id, $titre) {
        self::seConnecter();

        self::$requete = "UPDATE quisommesnous_ongletCategorie SET id = '$id', titre = '$titre' WHERE id='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('id', $id);
        self::$pdoStResults->bindValue('titre', $titre);


        self::$pdoStResults->execute();
    }

    public static function modifSousCategorie($id, $titre, $contenu, $categories) {
        self::seConnecter();

        self::$requete = "UPDATE quisommesnous_ongletSousCategorie SET id = '$id', titre = '$titre', contenu = '$contenu', idCategorie = '$categories' WHERE id='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('id', $id);
        self::$pdoStResults->bindValue('titre', $titre);
        self::$pdoStResults->bindValue('contenu', $contenu);
        self::$pdoStResults->bindValue('categories', $categories);


        self::$pdoStResults->execute();
    }

    public static function ajoutOngletPrincipal($titre) {
        self::seConnecter();

        self::$requete = "INSERT INTO quisommesnous_ongletCategorie (titre) values ('$titre')";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('titre', $titre);

        self::$pdoStResults->execute();
    }

    public static function ajoutSousCategorie($titre, $contenu, $idCategorie) {
        self::seConnecter();

        self::$requete = "INSERT INTO quisommesnous_ongletSousCategorie (titre, contenu, idCategorie) values ('$titre', '$contenu', '$idCategorie')";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('titre', $titre);
        self::$pdoStResults->bindValue('contenu', $contenu);
        self::$pdoStResults->bindValue('idCategorie', $idCategorie);


        self::$pdoStResults->execute();
    }
    
        public static function supprimerSousCategorie($id) {
        try {
            self::seConnecter();

            self::$requete = "DELETE FROM quisommesnous_ongletSousCategorie WHERE id=:id";
            self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

            self::$pdoStResults->bindValue('id', $id);
            self::$pdoStResults->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    
           public static function supprimerCategorie($id) {
        try {
            self::seConnecter();

            self::$requete = "DELETE FROM quisommesnous_ongletCategorie WHERE id=:id";
            self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

            self::$pdoStResults->bindValue('id', $id);
            self::$pdoStResults->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
 //  </editor-fold>
    
    
}

?>


