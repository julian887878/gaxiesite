<?php

GestionAdmin::passerAdmin($_REQUEST['idUtilisateur']);
 echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_utilisateur'
            </SCRIPT>";
        GestionAdmin::seDeconnecter();
?>