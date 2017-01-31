<?php
require_once 'configs/chemins.class.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';
require_once Chemins::MODELES . 'gestion_admin.class.php';


$maxsize = 1234666666666666;
$erreur = "";
$maxwidth = 500000;
$maxheight = 500000;

if ($_FILES['icone']['error'] > 0)
    $erreur = "Erreur lors du transfert";

$extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
$extension_upload = strtolower(substr(strrchr($_FILES['icone']['name'], '.'), 1));
if (in_array($extension_upload, $extensions_valides))
    echo "";


//Créer un identifiant difficile à deviner
$nom = md5(uniqid(rand(), true));
$resultat = move_uploaded_file($_FILES['icone']['tmp_name'], "public/personnel/avatar/".$nom.".jpg");

if ($resultat)
    GestionAdmin::uploadAvatar($nom.".jpg", $_POST['idUtilisateur']);
echo "<SCRIPT langage=JavaScript>
            document.location.href='index.php?cas=afficherSectionsConnecter&categorie=moncompte'
            </SCRIPT>";
?>

