<?php
GestionAdmin::modifCompteurMiGauche($_REQUEST['image'], $_REQUEST['nombre'], $_REQUEST['texte']);
 echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=information_entreprise'
       </SCRIPT>";
?>
