<?php
GestionAdmin::modifTexteSliderPrincipal($_REQUEST['titre'], $_REQUEST['description'], $_REQUEST['id']);
 echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_principal'
       </SCRIPT>";
?>

