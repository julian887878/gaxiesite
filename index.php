<?php

session_start();
require_once 'configs/chemins.class.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';
require_once Chemins::MODELES . 'gestion_admin.class.php';


require Chemins::VUES_PERMANENTES . 'v_menu_principal.inc.php';


if (!isset($_REQUEST['cas'])) {
    $cas = 'afficherAccueil';
} else {
    $cas = $_REQUEST['cas'];
}
if (isset($_REQUEST['categorie'])) {
    $categorie = $_REQUEST['categorie'];
}

switch ($cas) {
    case 'afficherAccueil' : {
            require Chemins::VUES . 'v_accueil.inc.php';
            break;
        }
    case 'afficherSections' : {
            if (file_exists(Chemins::VUES . 'v_' . $categorie . '.inc.php')) {
                require Chemins::VUES . 'v_' . $categorie . '.inc.php';
            } else {
                require Chemins::VUES . 'v_erreur404.inc.php';
            }
            break;
        }
        
    case 'modificationparametre' : {
         
                    GestionAdmin::modifUser(addslashes($_POST['nom']),addslashes($_POST['prenom']),addslashes($_POST['email']), addslashes($_POST['tel']),addslashes($_POST['poste']));
                    GestionAdmin::seDeconnecter();
                    require Chemins::VUES_MEMBRE . 'v_moncompte.inc.php';
                    echo "<SCRIPT LANGUAGE='JavaScript'>document.location.href='index.php?cas=afficherSectionsConnecter&categorie=moncompte</SCRIPT>";
     break;   
    }
        
    case 'rechercherSections' : {
            if (file_exists(Chemins::VUES_PERMANENTES . 'v_rechercher.inc.php')) {
                require Chemins::VUES_PERMANENTES . 'v_rechercher.inc.php';
            } else {
                require Chemins::VUES . 'v_erreur404.inc.php';
            }
            break;
        }
        
   case 'afficherSectionsConnecter': {
            if (isset($_SESSION['login_utilisateur']) or isset($_SESSION['login_admin'])) {
                $chemin = Chemins::VUES_MEMBRE . 'v_' . $categorie . '.inc.php';
                if (file_exists($chemin))
                    require $chemin;
            }else {
                require Chemins::VUES . 'v_connexion.inc.php';
            }
            break;
        }
        
    case 'afficherSectionsAdmin' : {
            if (file_exists(Chemins::VUES_ADMIN . 'v_admin_' . $categorie . '.inc.php')) {
                require Chemins::VUES_ADMIN . 'v_admin_' . $categorie . '.inc.php';
            } else {
                require Chemins::VUES . 'v_erreur404.inc.php';
            }
            break;
        }

            case'inscription' : {
                try { 
                    GestionAdmin::ajouterUser($_POST['mail1'], $_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['poste'], $_POST['pass1']);
                    GestionAdmin::seDeconnecter();
                    $_SESSION['login_utilisateur'] = $_POST['mail1'];
                    echo "<SCRIPT LANGUAGE='JavaScript'>document.location.href='index.php?cas=afficherSectionsConnecter&categorie=moncompte'</SCRIPT>";
                    } catch (Exception $e) {
                     echo "<SCRIPT LANGUAGE='JavaScript'>document.location.href='index.php?cas=afficherSections&categorie=dejapris'</SCRIPT>";
    }
                    break;
             }
        
        
    case 'verifConnexion' : {
            if (!GestionAdmin::isUserOk($_POST['mail1'], $_POST['passe1'])) {
                if (GestionAdmin::isEmailOk($_POST['mail1'])) {
                    echo"<SCRIPT LANGUAGE='JavaScript'> document.location.href='index.php?cas=afficherSections&categorie=erreurco_mdp'</SCRIPT>";
                } else {
                    echo"<SCRIPT LANGUAGE='JavaScript'> document.location.href='index.php?cas=afficherSections&categorie=erreurco'</SCRIPT>";
                }
            } else {
                if (GestionAdmin::isAdminOK($_POST['mail1'], $_POST['passe1'])) {
                    //Il est admin
                    $_SESSION['login_admin'] = $_POST['mail1'];
                    echo"<SCRIPT langage=JavaScript>
            document.location.href='index.php?cas=afficherSectionsConnecter&categorie=moncompte'
           </SCRIPT>";
                } else {
                    //Il est simple utilisateur
                    $_SESSION['login_utilisateur'] = $_POST['mail1'];
                    echo"<SCRIPT langage=JavaScript>
            document.location.href='index.php?cas=afficherSectionsConnecter&categorie=moncompte'
           </SCRIPT>";}
            }
            break;
        }
    case 'SeDeconnecter': {
            //Suppression des variables de session et de la session
            $_SESSION = array();
            session_destroy();
            //setcookie('login_admin','');
            echo "<SCRIPT langage=JavaScript>
            document.location.href='index.php?cas=afficherAccueil'
            </SCRIPT>";
            break;
        }
        default :
         require Chemins::VUES. 'v_erreur404.inc.php';
       break;
}
        


require Chemins::VUES_PERMANENTES . 'v_footer.inc.php';
?>


