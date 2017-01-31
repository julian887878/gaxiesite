<?php

GestionAdmin::modifSousCategorie($_POST['id'],  addslashes($_POST['titre']), addslashes($_POST['contenu']), addslashes($_POST['categories']));

        echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet'
            </SCRIPT>";
        GestionAdmin::seDeconnecter();
?>
