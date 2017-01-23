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

