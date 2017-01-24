<?php
$lesOngletCategorie = GestionAdmin::getOngletCategorie();
$ongletSousCat = GestionAdmin::getOngletSousCategorie();
?>


<div class='right_col' role='main'> 

    <?php
    foreach ($lesOngletCategorie as $unOngletCategorie) {
        $lesSousCategorie = GestionAdmin::getOngletSousCategorieByCategorie($unOngletCategorie->id);


        echo "
    <div class='row'>
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class='x_panel tile fixed_height_520'>
                <div class='x_title'>
                    <h2>$unOngletCategorie->titre&nbsp;&nbsp;<a href='index_admin.php?cas=afficherSectionsAdmin&categorie=modifier_onglet_categorie&titre=$unOngletCategorie->titre&id=$unOngletCategorie->id' alt='Modifier'><i class='fa fa-pencil'></i></a> &nbsp;&nbsp;<a href='#' data-toggle='modal' data-target='.supprimer-categorie-$unOngletCategorie->id' alt='Supprimer'><i class='fa fa-trash'></i></a></h2>
                    <ul class='nav navbar-right panel_toolbox'>
                        <li><a class='collapse-link'><i class='fa fa-chevron-up'></i></a>
                        </li>
                    </ul>
                    <div class='clearfix'></div>
                </div>
                <div class='x_content'>
                    <div class='widget_summary'>
                        <div class='col-md-12 col-sm-12 col-xs-12'>
                            <div class='x_panel'>
                                <div class='x_title'>
                                    <h2>Sous onglets <small>Liste des sous onglets</small></h2>
                                    
                                    <div class='clearfix'></div>
                                </div>
                                <div class='x_content'>
    
                                    <table class='table table-bordered'>
                                        <thead>
                                            <tr>
                                                <th><center>#</center></th>
                                                <th><center>Titre</center></th>
                                                <th><center>Modifier</center></th>
                                                <th><center>Supprimer</center></th>
                                            </tr>
                                        </thead>
                                        ";
        foreach ($lesSousCategorie as $uneCateg) {
            echo "
                                        <tbody>
                                            <tr>
                                                <th scope='row'><center>$uneCateg->id</center></th>
                                                <td><center>$uneCateg->titre</center></td>
                                    <td><center><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=modifier_onglet_sous_categorie&id=$uneCateg->id'><i class='fa fa-pencil'></i></a></center></td>
                                                <td><center><a href='' data-toggle='modal' data-target='.supprimer-onglet-de-sous-categorie-$uneCateg->id'><i class='fa fa-trash'></i></a></center></td>
                                        </tr>
                                                              
                                        </tbody>";
        }echo "
    </table>";
        foreach ($lesSousCategorie as $uneCateg) {
            echo "<div class='modal fade supprimer-onglet-de-sous-categorie-$uneCateg->id' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Suppression de $uneCateg->titre</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Onglet $uneCateg->titre</i></h4>
                <p>Vous allez supprimer l'onglet de la page <i>Qui sommes-nous</i>. Voulez vous vraiment poursuivre votre action ?</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <a href='index_admin.php?cas=cacherSectionsAdmin&categorie=supprimer_sous_categorie&id=$uneCateg->id' class='btn btn-primary'>Oui, supprimer</a>
            </div>

        </div>
    </div>
        </div>";
        }echo"
    

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='clearfix'></div>
                </div>
            </div>
        </div>
    </div>
     
";
    }
    ?>
    
    
<?php
foreach ($lesOngletCategorie as $unOngletCategorie) {
    echo "<div class='modal fade supprimer-categorie-$unOngletCategorie->id' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Suppression de $unOngletCategorie->titre</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Onglet $unOngletCategorie->titre</i></h4>
                <p>Vous allez supprimer l'onglet de la page <i>Qui sommes-nous</i> ainsi que tout ses sous onglet. Voulez vous vraiment poursuivre votre action ?</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <a href='index_admin.php?cas=cacherSectionsAdmin&categorie=supprimer_categorie&id=$unOngletCategorie->id' class='btn btn-primary'>Oui, supprimer</a>
            </div>

        </div>
    </div>
        </div>";
}

?>
</div>




