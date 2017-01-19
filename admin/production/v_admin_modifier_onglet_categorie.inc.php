<?php $titre = $_REQUEST['titre'];
$id = $_REQUEST['id'];?>

<div class="right_col" role="main">   
    <div class="row">
        <div class="col-lg-12">
            <center><h2>Modifier le titre correspondant à l'onglet principal</h2></center>
            <center><p>Cet onglet se modifira dans la page <i>Qui sommes-nous ?</i></p></center>
        </div>
    </div>
    <!-- start form for validation -->
    <form  method="post" action="index_admin.php?cas=cacherSectionsAdmin&categorie=modifier_titre_categorie" id="demo-form">
        <label for='fullname'>Identifiant :</label>
        <div class='row'>
            <div class='col-lg-6'>
        <?php echo "<input type='text' class='form-control' name='id' id='id' readonly='readonly' value='$id'/> ";?>
            </div>
        </div><br>
<label for="fullname">Titre du nouvel onglet :</label>
<div class="row">
    <div class="col-lg-6">
        <?php echo "<input type='text' id='titre' class='form-control' name='titre' value=$titre required />" ?>
    </div>
    <div class="col-lg-2">
        <button type="submit" name="submit" class="btn btn-primary">Modifier l'onglet</button>
    </div>
</div>
</form>
<!-- end form for validations -->

</div>



