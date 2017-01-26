<?php
require_once 'configs/chemins.class.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';
require_once Chemins::MODELES . 'gestion_admin.class.php';

$ancienFichier = GestionAdmin::getAnciennePhoto($_POST['id']);
unlink('public/images/slider_principal/'.$ancienFichier->image);

$maxsize = 1234666666666666;
$erreur = "";
$maxwidth = 100;
$maxheight = 100;

if ($_FILES['icone']['error'] > 0)
    $erreur = "Erreur lors du transfert";
if ($_FILES['icone']['size'] > $maxsize)
    $erreur = "Le fichier est trop gros";
$extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
$extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
if (in_array($extension_upload, $extensions_valides))
    echo "Extension correcte";


//Créer un identifiant difficile à deviner
$nom = md5(uniqid(rand(), true));
$resultat = move_uploaded_file($_FILES['icone']['tmp_name'], "public/images/slider_principal/".$nom.".jpg");
if ($resultat)
    GestionAdmin::uploadImage($nom.".jpg", $_POST['id']);
//echo "<SCRIPT langage=JavaScript>
//            document.location.href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_principal'
//            </SCRIPT>";
?>

