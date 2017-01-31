<div class="right_col" role="main">   
    <div class="row">
        <div class="col-lg-12">
            <center><h2>Ajouter un titre correspondant à un onglet principal</h2></center>
            <center><p>Cet onglet s'ajoutera dans la page <i>Qui sommes-nous ?</i></p></center>
        </div>
    </div>
    <!-- start form for validation -->
    <form method='post' action='index_admin.php?cas=cacherSectionsAdmin&categorie=ajouter_categorie' id="demo-form" data-parsley-validate>
        <label for="titre">Titre du nouvel onglet :</label>
        <div class="row">
            <div class="col-lg-10">
                <input type="text" id="titre" class="form-control" name="titre" required />
            </div>
            <div class="col-lg-2">
                <a data-toggle="modal" data-target=".ajouter-onglet-categorie" class="btn btn-primary">Ajouter l'onglet</a>
            </div>
        </div>


        <div class="modal fade ajouter-onglet-categorie" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Ajout d'un onglet</h4>
                    </div>
                    <div class="modal-body">
                        <p>Vous allez ajouter un nouvel onglet dans la page <i>Qui sommes-nous</i>. Voulez-vous poursuivre votre action ?</p>
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



