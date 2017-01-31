<?php
$maxsize = 1234666666666666;
$erreur = "";
$maxwidth = 500000;
$maxheight = 500000;

if ($_FILES['icone']['error'] > 0)
    $erreur = "Erreur lors du transfert";

$extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
$extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
if (in_array($extension_upload, $extensions_valides))
    echo "Extension correcte";


//Créer un identifiant difficile à deviner
$nom = md5(uniqid(rand(), true));
$resultat = move_uploaded_file($_FILES['icone']['tmp_name'], "public/images/popup_lightbox/".$nom.".jpg");
if ($resultat)
    GestionAdmin::ajoutImagePopup($_REQUEST['relation'], addslashes($_REQUEST['titre']), addslashes($_REQUEST['description']),$nom.".jpg");
echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'
            </SCRIPT>";
?>
