<?php

GestionAdmin::ajoutSousCategorie(addslashes($_REQUEST['titre']), addslashes($_REQUEST['contenu']), addslashes($_REQUEST['idCategorie']));
echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet'
            </SCRIPT>";

?>