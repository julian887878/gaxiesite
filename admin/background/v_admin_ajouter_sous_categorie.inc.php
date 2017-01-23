<?php

GestionAdmin::ajoutSousCategorie($_REQUEST['titre'], $_REQUEST['contenu'], $_REQUEST['idCategorie']);
echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet'
            </SCRIPT>";

?>