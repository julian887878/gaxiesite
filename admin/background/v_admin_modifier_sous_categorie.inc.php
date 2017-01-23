<?php

GestionAdmin::modifSousCategorie($_POST['id'], $_POST['titre'], $_POST['contenu'], $_POST['categories']);

var_dump($_POST['id']);
var_dump($_POST['titre']);
var_dump($_POST['contenu']);
var_dump($_POST['categories']);
        GestionAdmin::seDeconnecter();
?>
