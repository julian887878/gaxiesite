<?php

GestionAdmin::modifTextePopup($_POST['titre'], addslashes($_POST['description']), addslashes($_POST['idPopup']));

        echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'
            </SCRIPT>";
?>

