<?php

GestionAdmin::modifTitreCategorie($_POST['id'], $_POST['titre']);

        echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet'
            </SCRIPT>";
        GestionAdmin::seDeconnecter();

