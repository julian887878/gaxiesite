<?php
GestionAdmin::modifTexteSliderSecondaire($_REQUEST['titre'],  $_REQUEST['id']);
 echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'
       </SCRIPT>";
?>



