<?php
$infosSousCat = GestionAdmin::getOngletSousCategorieByidSousCategorie($_REQUEST['id']);
$lesCateg = GestionAdmin::getCategorie();
?> 

<div class="right_col" role="main"> 

    <div class="row">
        <div class="col-lg-12">
            <center><h2>Modifier l'onglet de sous catégorie</h2></center>
            <center><p>Cet onglet se modifira dans la page <i>Qui sommes-nous ?</i> à l'interieur de l'onglet catégorie correspondant</p></center>
        </div>
    </div>
    <!-- start form for validation -->
    <form  method="post" action="index_admin.php?cas=cacherSectionsAdmin&categorie=modifier_sous_categorie">
        <label for='fullname'>Identifiant :</label>
        <div class='row'>
            <div class='col-lg-6'>
<?php echo "<input type='text' class='form-control' name='id' id='id' readonly='readonly' value='$infosSousCat->id'/> "; ?>
            </div>
        </div><br>
        <label for="fullname">Titre de la sous catégorie :</label>
        <div class="row">
            <div class="col-lg-12">
<?php echo "<input type='text' id='titre' class='form-control' name='titre' value='".htmlentities($infosSousCat->titre)."' required/>"; ?>
            </div>
        </div><br>
        <div class='row'>
            <div class="col-lg-12">
                <label for="categories">Categorie correspondant :</label>
                <select id="categories" name='categories' class="form-control" required>
                    <option value="">Catégorie..</option>
                    <?php
                    foreach ($lesCateg as $uneCategorie) {
                        echo"<option value='$uneCategorie->id'>$uneCategorie->titre</option>";
                    }
                    ?>
                </select>
            </div>
        </div><br>



        <div class='row'>
            <div class="col-lg-12">
                <label for="fullname">Contenu :</label>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class='row'>
            <div class="col-md-12">
<?php echo "<textarea cols='80' class='ckeditor' id='contenu' name='contenu' rows='10'>$infosSousCat->contenu</textarea>"; ?>
            </div>
        </div><br />


        <div class="row">
            <div class='col-lg-12'>
                <center><a data-toggle="modal" data-target=".supprimer-onglet-sous-categorie" class="btn btn-primary">Modifier la sous catégorie</a></center>
            </div>
        </div><br>


        <div class="modal fade supprimer-onglet-sous-categorie" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Modification d'un onglet de sous catégorie</h4>
                    </div>
                    <div class="modal-body">
                        <h4><i>Onglet <?php echo "$infosSousCat->titre" ?></i></h4>
                        <p>Vous allez modifier l'onglet <?php echo "$infosSousCat->titre" ?> de la page <i>Qui sommes-nous</i>. Voulez vous vraiment poursuivre votre action ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-primary">Oui, modifier</button>
                    </div>

                </div>
            </div>
        </div>

    </form>
</div>

<!-- end form for validations -->

</div>



