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
        <a href="#" data-toggle="modal" data-target=".supprimer-onglet-categorie" class="btn btn-primary">Modifier l'onglet</a>
    </div>
</div>

<div class="modal fade supprimer-onglet-categorie" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Modification d'un onglet</h4>
            </div>
            <div class="modal-body">
                <h4><i>Onglet numéro 1</i></h4>
                <p>Vous allez modifier l'onglet <?php echo "$titre" ?> de la page <i>Qui sommes-nous</i>. Voulez vous vraiment poursuivre votre action ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                <button type="submit" class="btn btn-primary">Oui, modifier</button>
            </div>

        </div>
    </div>
</div>

</form>
<!-- end form for validations -->

</div>



