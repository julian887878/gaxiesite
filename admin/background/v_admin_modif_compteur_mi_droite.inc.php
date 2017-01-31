<?php
GestionAdmin::modifCompteurMiDroite(addslashes($_REQUEST['image']), addslashes($_REQUEST['nombre']), addslashes($_REQUEST['texte']));
 echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=information_entreprise'
       </SCRIPT>";
?>

