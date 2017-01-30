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
                echo 'Code : ' . $ex->getCode(); //méthode de la classe exception
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
    public static function ajouterUser($mail1,$nom,$prenom,$tel,$poste,$pass1) {
        self::seConnecter();
        self::$requete = "insert into utilisateur(emailUtilisateur,nomUtilisateur,prenomUtilisateur,telUtilisateur,posteUtilisateur,mdpUtilisateur) values (:emailUtilisateur,:nomUtilisateur,:prenomUtilisateur,:telUtilisateur,:posteUtilisateur,:mdpUtilisateur);";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->bindValue('emailUtilisateur', $mail1);
        self::$pdoStResults->bindValue('nomUtilisateur', $nom);
        self::$pdoStResults->bindValue('prenomUtilisateur', $prenom);
        self::$pdoStResults->bindValue('telUtilisateur', $tel);;
        self::$pdoStResults->bindValue('posteUtilisateur', $poste);;
        self::$pdoStResults->bindValue('mdpUtilisateur', sha1($pass1));
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
    
        public static function isUserOk($mail1, $passe1) {
        self::seConnecter();
        self::$requete = "SELECT * FROM utilisateur where emailUtilisateur='$mail1' and mdpUtilisateur='".sha1($passe1)."'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();
        self::$pdoStResults->closeCursor();
        if ((self::$resultat != null))
            return true;
        else
            return false;
    }
    
         public static function isEmailOk($mail1) {
        self::seConnecter();
        self::$requete = "SELECT * FROM utilisateur where emailUtilisateur='$mail1'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();
        self::$pdoStResults->closeCursor();
        if ((self::$resultat != null))
            return true;
        else
            return false;
    }
    
    public static function isAdminOK($mail1, $passe1) {
        self::seConnecter();
        self::$requete = "SELECT * FROM utilisateur where emailUtilisateur='$mail1' and mdpUtilisateur='".sha1($passe1)."'";
        
        
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();
        self::$pdoStResults->closeCursor();
        if ((self::$resultat != null) and (self::$resultat->isAdmin))
            return true;
        else
            return false;
    }
    
    public static function isPersonnelOK($mail1, $passe1) {
        self::seConnecter();
        self::$requete = "SELECT * FROM utilisateur where emailUtilisateur='$mail1' and mdpUtilisateur='".sha1($passe1)."'";
        
        
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();
        self::$pdoStResults->closeCursor();
        if ((self::$resultat != null) and (self::$resultat->isPersonnel))
            return true;
        else
            return false;
    }
    
    public static function isUtilisateurValideOK($mail1, $passe1) {
        self::seConnecter();
        self::$requete = "SELECT * FROM utilisateur where emailUtilisateur='$mail1' and mdpUtilisateur='".sha1($passe1)."'";
        
        
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();
        self::$pdoStResults->closeCursor();
        if ((self::$resultat != null) and (self::$resultat->isUtilisateurValide))
            return true;
        else
            return false;
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
    
    
    
        public static function passerAdmin($idUtilisateur) {
        self::seConnecter();

        self::$requete = " UPDATE utilisateur SET isAdmin = '1' WHERE idUtilisateur = $idUtilisateur;";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('idUtilisateur', $idUtilisateur);


        self::$pdoStResults->execute();
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
    
    // <editor-fold defaultstate="collapsed" desc="région ACCUEIL">
        
        public static function getSlider1() {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_sliderPrincipal";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
    public static function getSlider2() {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_sliderSecondaire";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
        public static function getImagePopup($relation) {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_popupSliderSecondaire WHERE relation = $relation";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
           public static function getAllImagePopup() {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_popupSliderSecondaire";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
        public static function getCompteur() {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_compteur";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
    
  //  </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="région photo">
        public static function uploadImage($image, $id) {
        self::seConnecter();

        self::$requete = " UPDATE accueil_sliderPrincipal SET image = '$image' WHERE id = '$id';";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('image', $image);
        self::$pdoStResults->bindValue('id', $id);


        self::$pdoStResults->execute();
    }
    
            public static function uploadImageSlider2($image, $id) {
        self::seConnecter();

        self::$requete = " UPDATE accueil_sliderSecondaire SET image = '$image' WHERE id = '$id';";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('image', $image);
        self::$pdoStResults->bindValue('id', $id);


        self::$pdoStResults->execute();
    }
    
    public static function uploadImageSlider2Popup($image, $idPopup) {
        self::seConnecter();

        self::$requete = " UPDATE accueil_popupSliderSecondaire SET image = '$image' WHERE idPopup = '$idPopup';";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('image', $image);
        self::$pdoStResults->bindValue('idPopup', $idPopup);


        self::$pdoStResults->execute();
    }
    
        public static function uploadAvatar($avatarUtilisateur, $idUtilisateur) {
        self::seConnecter();

        self::$requete = " UPDATE utilisateur SET avatarUtilisateur = '$avatarUtilisateur' WHERE idUtilisateur = '$idUtilisateur';";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('avatarUtilisateur', $avatarUtilisateur);
        self::$pdoStResults->bindValue('idUtilisateur', $idUtilisateur);


        self::$pdoStResults->execute();
    }
    
        public static function ajoutImagePopup($relation, $titre, $description, $image) {
        self::seConnecter();

        self::$requete = "INSERT INTO accueil_popupSliderSecondaire (relation,titre,description,image) values ('$relation','$titre','$description','$image')";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('relation', $relation);
        self::$pdoStResults->bindValue('titre', $titre);
        self::$pdoStResults->bindValue('description', $description);
        self::$pdoStResults->bindValue('image', $image);


        self::$pdoStResults->execute();
    }
    
    
    public static function getAnciennePhoto($id) {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_sliderPrincipal WHERE id='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
        public static function getAnciennePhotoSlider2($id) {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_sliderSecondaire WHERE id='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
            public static function getAnciennePhotoSlider2Popup($idPopup) {

        self::seConnecter();
        self::$requete = "SELECT * FROM accueil_popupSliderSecondaire WHERE idPopup='$idPopup'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
        public static function modifTexteSliderPrincipal($titre, $description, $id) {
        self::seConnecter();

        self::$requete = "UPDATE accueil_sliderPrincipal SET titre = '$titre', description = '$description' WHERE id='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('titre', $titre);
        self::$pdoStResults->bindValue('description', $description);
        self::$pdoStResults->bindValue('id', $id);
        


        self::$pdoStResults->execute();
    }
    
              public static function modifTextePopup($titre, $description, $idPopup) {
        self::seConnecter();

        self::$requete = "UPDATE accueil_popupSliderSecondaire SET titre = '$titre', description = '$description' WHERE idPopup='$idPopup'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('titre', $titre);
        self::$pdoStResults->bindValue('description', $description);
        self::$pdoStResults->bindValue('idPopup', $idPopup);
        


        self::$pdoStResults->execute();
    }
    
            public static function modifTexteSliderSecondaire($titre, $id) {
        self::seConnecter();

        self::$requete = "UPDATE accueil_sliderSecondaire SET titre = '$titre' WHERE id='$id'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('titre', $titre);
        self::$pdoStResults->bindValue('id', $id);
        


        self::$pdoStResults->execute();
    }
    
            public static function supprimerImagePopup($idPopup) {
        try {
            self::seConnecter();

            self::$requete = "DELETE FROM accueil_popupSliderSecondaire WHERE idPopup = $idPopup";
            self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

            self::$pdoStResults->bindValue('idPopup', $idPopup);
            self::$pdoStResults->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="région COMPTEUR">
        
    public static function getIcones() {

        self::seConnecter();
        self::$requete = "SELECT * FROM icone";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
            public static function modifCompteurGauche($image, $nombre, $texte) {
        self::seConnecter();

        self::$requete = "UPDATE accueil_compteur SET image = '$image', nombre = '$nombre', texte = '$texte' WHERE id= 1";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('image', $image);
        self::$pdoStResults->bindValue('nombre', $nombre);
        self::$pdoStResults->bindValue('texte', $texte);


        self::$pdoStResults->execute();
    }
    
               public static function modifCompteurDroite($image, $nombre, $texte) {
        self::seConnecter();

        self::$requete = "UPDATE accueil_compteur SET image = '$image', nombre = '$nombre', texte = '$texte' WHERE id= 4";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('image', $image);
        self::$pdoStResults->bindValue('nombre', $nombre);
        self::$pdoStResults->bindValue('texte', $texte);


        self::$pdoStResults->execute();
    }
    
             public static function modifCompteurMiGauche($image, $nombre, $texte) {
        self::seConnecter();

        self::$requete = "UPDATE accueil_compteur SET image = '$image', nombre = '$nombre', texte = '$texte' WHERE id= 2";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('image', $image);
        self::$pdoStResults->bindValue('nombre', $nombre);
        self::$pdoStResults->bindValue('texte', $texte);


        self::$pdoStResults->execute();
    }
    
    
        public static function modifCompteurMiDroite($image, $nombre, $texte) {
        self::seConnecter();

        self::$requete = "UPDATE accueil_compteur SET image = '$image', nombre = '$nombre', texte = '$texte' WHERE id= 3";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->bindValue('image', $image);
        self::$pdoStResults->bindValue('nombre', $nombre);
        self::$pdoStResults->bindValue('texte', $texte);


        self::$pdoStResults->execute();
    }
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="région Echange">
         
        public static function getExplication() {

        self::seConnecter();
        self::$requete = "SELECT * FROM echange_explication";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
    //</editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="région recheche">
    
        public static function recherche($recherche) {

        self::seConnecter();
        self::$requete = "SELECT quisommesnous_ongletSousCategorie.titre as 'titre', quisommesnous_ongletCategorie.titre as 'tt', quisommesnous_ongletSousCategorie.contenu as 'contenu' FROM quisommesnous_ongletSousCategorie, quisommesnous_ongletCategorie WHERE quisommesnous_ongletCategorie.id = quisommesnous_ongletSousCategorie.idCategorie and quisommesnous_ongletSousCategorie.contenu like '%$recherche%'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetchAll();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
            public static function nbRecherche($recherche) {

        self::seConnecter();
        self::$requete = "SELECT count(*) as nbrecherche FROM quisommesnous_ongletSousCategorie WHERE contenu like '%$recherche%'";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);

        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();

        self::$pdoStResults->closeCursor();

        return self::$resultat;
    }
    
 
    
              
    //</editor-fold>

}
?>


