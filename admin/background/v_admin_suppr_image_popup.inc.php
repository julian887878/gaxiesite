<?php
$anciennePhoto = GestionAdmin::getAnciennePhotoSlider2Popup($_REQUEST['idPopup']);
unlink('public/images/popup_lightbox/'.$anciennePhoto->image);
GestionAdmin::supprimerImagePopup($_REQUEST['idPopup']);
echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'
            </SCRIPT>";
?>
