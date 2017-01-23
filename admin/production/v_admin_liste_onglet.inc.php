<?php $lesOngletCategorie = GestionAdmin::getOngletCategorie();
      ?>


<div class='right_col' role='main'> 
  
    <?php
    foreach ($lesOngletCategorie as $unOngletCategorie){
            $lesSousCategorie = GestionAdmin::getOngletSousCategorieByCategorie($unOngletCategorie->id);
   
    
    echo "
    <div class='row'>
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class='x_panel tile fixed_height_320'>
                <div class='x_title'>
                    <h2>$unOngletCategorie->titre&nbsp;&nbsp;<a href='index_admin.php?cas=afficherSectionsAdmin&categorie=modifier_onglet_categorie&titre=$unOngletCategorie->titre&id=$unOngletCategorie->id' alt='Modifier'><i class='fa fa-pencil'></i></a> &nbsp;&nbsp;<a href='#' data-toggle='modal' data-target='.supperimer-onglet-categorie' alt='Supprimer'><i class='fa fa-trash'></i></a></h2>
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
                                                <td><center><i class='fa fa-trash'></i></center></td>
                                        </tr>
                                                              
                                        </tbody>";}echo "
    </table>
    

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='clearfix'></div>
                </div>
            </div>
        </div>
    </div>
    
    ";}?>
    
</div>

