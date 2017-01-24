<?php
$lesUtilisateurs = GestionAdmin::getUtilisateur();
?>

<div class="right_col" role="main">                            
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Utilisateurs</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    Voici la liste des utilisateurs qui sont inscrit sur le site.
                </p>
                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="check-all" class="flat"></th>
                            <th>Nom Prénom</th>
                            <th>Poste</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Nommer Administrateur</th>
                            <th>Administrateur</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        foreach ($lesUtilisateurs as $unUtilisateur) {
                            echo "
                        <tr>
                            <td><input type='checkbox' class='flat' name='table_records'></td>
                            <td>$unUtilisateur->nomUtilisateur $unUtilisateur->prenomUtilisateur</td>
                            <td>$unUtilisateur->posteUtilisateur</td>
                            <td>$unUtilisateur->emailUtilisateur</td>
                            <td>$unUtilisateur->telUtilisateur</td>";
                            if ($unUtilisateur->isAdmin == 1) {
                                echo "<td><center>Déjà admin</center></td>";
                            } else {
                                echo "<td><center><i class='fa fa-exchange'></i></center></td>";
                            }
                            if ($unUtilisateur->isAdmin == 1) {
                                echo "<td><center>OUI</center></td>";
                            } else {
                                echo "<td><center>NON</center></td>";
                            }
                            echo"
                            <td><center><a href='' data-toggle='modal' data-target='.supprimer-utilisateur-$unUtilisateur->idUtilisateur'><i class='fa fa-close'></i></a></center></td>
                        </tr>
                        ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    foreach ($lesUtilisateurs as $unUtilisateur) {
        echo"<div class='modal fade supprimer-utilisateur-$unUtilisateur->idUtilisateur' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Suppression de $unUtilisateur->nomUtilisateur $unUtilisateur->prenomUtilisateur</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Utilisateur $unUtilisateur->nomUtilisateur $unUtilisateur->prenomUtilisateur</i></h4>
                <p>Voulez-vous vraiment supprimer cet utilisateur ?</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <a href='index_admin.php?cas=cacherSectionsAdmin&categorie=supprimer_utilisateur&idUtilisateur=$unUtilisateur->idUtilisateur' class='btn btn-primary'>Oui, supprimer</a>
            </div>

        </div>
    </div>
        </div>";
    }
    ?>
</div>

