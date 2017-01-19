<?php

//sds
session_start();
require_once 'configs/chemins.class.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';

require_once Chemins::VUES_PERMANENTES_ADMIN . 'v_entete.inc.php';
require_once Chemins::VUES_PERMANENTES_ADMIN . 'v_menu_gauche.inc.php';
require_once Chemins::VUES_PERMANENTES_ADMIN . 'v_menu_bas.inc.php';
require_once Chemins::VUES_PERMANENTES_ADMIN . 'v_menu_haut.inc.php';




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
            require Chemins::VUES_ADMIN . 'v_admin_accueil.inc.php';
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

    case 'cacherSectionsAdmin' : {
            if (file_exists(Chemins::VUES_ADMIN . 'v_admin_' . $categorie . '.inc.php')) {
                require Chemins::VUES_ADMIN . 'v_admin_' . $categorie . '.inc.php';
            } else {
                require Chemins::VUES . 'v_erreur404.inc.php';
            }
            break;
        }
}
require Chemins::VUES_PERMANENTES_ADMIN . 'v_footer.inc.php';
?>

