
<?php

if (GestionAdmin::getConnectionUser($_POST['emailUtilisateur'], $_POST['mdpUtilisateur'])) {
                echo "<SCRIPT langage=JavaScript>
            document.location.href='index_admin.php?cas=afficherAccueil'
            </SCRIPT>";
            } else {
                echo "<SCRIPT langage=JavaScript>
            document.location.href='index.php?cas=SeDeconnecter'
            </SCRIPT>
            ";
            }
            
            ?>

}
