<?php
require_once 'configs/chemins.class.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';
require_once Chemins::MODELES . 'gestion_admin.class.php';

$ancienFichier = GestionAdmin::getAnciennePhotoSlider2($_POST['id']);
unlink('public/images/slider_secondaire/images/'.$ancienFichier->image);


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
$resultat = move_uploaded_file($_FILES['icone']['tmp_name'], "public/images/slider_secondaire/images/".$nom.".jpg");

if ($resultat)
    GestionAdmin::uploadImageSlider2($nom.".jpg", $_POST['id']);
//echo "<SCRIPT langage=JavaScript>
//            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'
//            </SCRIPT>";
?>

