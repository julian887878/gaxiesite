
<?php

GestionAdmin::getConnectionUser($_POST['emailUtilisateur'], $_POST['mdpUtilisateur']); 
$_SESSION['membre'] = $_POST['emailUtilisateur'];
echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherAccueil'
            </SCRIPT>";
            ?>

}
