<?php
$lesCateg = GestionAdmin::getCategorie();
?> 
<div class="right_col" role="main">   
    <div class="row">
        <div class="col-lg-12">
            <center><h2>Ajouter un onglet de sous catégorie correspondant à l'onglet catégorie</h2></center>
            <center><p>Cet onglet s'ajoutera dans la page <i>Qui sommes-nous ?</i> à l'interieur de l'onglet catégorie correspondant</p></center>
        </div>
    </div>
    <!-- start form for validation -->
    <form method="post" action='index_admin.php?cas=cacherSectionsAdmin&categorie=ajouter_sous_categorie' id="demo-form" data-parsley-validate>
        <label for="titre">Titre de la sous catégorie :</label>
        <div class="row">
            <div class="col-lg-12">
                <input type="text" id="titre" class="form-control" name="titre" required />
            </div>
        </div><br>
        <div class='row'>
            <div class="col-lg-12">
                <label for="idCategorie">Categorie correspondant :</label>
                <select id="idCategorie" name="idCategorie" class="form-control" required>
                    <option value="">Catégorie..</option>
                    <?php
                    foreach ($lesCateg as $uneCateg) {
                        echo "<option value='$uneCateg->id'>$uneCateg->titre</option>";
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
                <textarea cols='80' class='ckeditor' id='contenu' name='contenu' rows='10'></textarea>
            </div>
        </div><br />

        <div class="row">
            <div class='col-lg-12'>
                <center><a data-toggle="modal" data-target=".ajouter-onglet-sous-categorie" class="btn btn-primary">Ajouter la sous catégorie</a></center>
            </div>
        </div>
        
                <div class="modal fade ajouter-onglet-sous-categorie" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Ajout d'un sous onglet</h4>
                    </div>
                    <div class="modal-body">
                        <p>Vous allez ajouter un nouveau sous onglet dans la page <i>Qui sommes-nous</i>. Voulez-vous poursuivre votre action ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-primary">Oui, ajouter</button>
                    </div>

                </div>
            </div>
        </div>

</form>
<!-- end form for validations -->

</div>



