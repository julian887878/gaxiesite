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
    case 'afficherSectionsAdmin' : {
            if (file_exists(Chemins::VUES_ADMIN . 'v_admin_' . $categorie . '.inc.php')) {
                require Chemins::VUES_ADMIN . 'v_admin_' . $categorie . '.inc.php';
            } else {
                require Chemins::VUES . 'v_erreur404.inc.php';
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
                    require Chemins::VUES_ADMIN . 'v_admin_accueil.inc.php';
                    echo"<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherAccueil'
           </SCRIPT>";
                }
                else {
                    //Il est simple utilisateur
                    $_SESSION['login_utilisateur'] = $_POST['mail1'];
                    require Chemins::VUES . 'v_echange.inc.php';
                    echo"document.location.href='index.php?cas=afficherSections&categorie=echange'</SCRIPT>";
                }
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
}

require Chemins::VUES_PERMANENTES . 'v_footer.inc.php';

?>

            
    