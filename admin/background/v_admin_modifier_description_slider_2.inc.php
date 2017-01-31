<?php
GestionAdmin::modifTexteSliderSecondaire(addslashes($_REQUEST['titre']),  addslashes($_REQUEST['id']));
 echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'
       </SCRIPT>";
?>



