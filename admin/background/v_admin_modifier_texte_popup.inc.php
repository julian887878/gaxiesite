<?php

GestionAdmin::modifTextePopup($_POST['idPopup'], addslashes($_POST['titre']), addslashes($_POST['description']));

        echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'
            </SCRIPT>";
?>

