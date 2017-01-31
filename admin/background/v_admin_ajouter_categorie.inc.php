<?php

GestionAdmin::ajoutOngletPrincipal(addslashes($_REQUEST['titre']));

echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet'
            </SCRIPT>";

  GestionAdmin::seDeconnecter();
?>

