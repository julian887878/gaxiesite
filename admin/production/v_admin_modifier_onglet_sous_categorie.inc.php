<?php $infosSousCat = GestionAdmin::getOngletSousCategorieByidSousCategorie($_REQUEST['id']);
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
<?php echo "<input type='text' id='titre' class='form-control' name='titre' value='$infosSousCat->titre' required/>"; ?>
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
                <textarea cols="80" class="ckeditor" id="contenu" name="contenu" rows="10"></textarea>
            </div>
        </div><br />


        <div class="row">
            <div class='col-lg-12'>
                <center><button type=submit class="btn btn-primary">Ajouter la sous catégorie</button></center>
            </div>
        </div><br>
    </form>
</div>

<!-- end form for validations -->

</div>



