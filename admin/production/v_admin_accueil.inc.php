

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-folder-open"></i>Total fichiers déposés</span>
            <div class="count">258</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-download"></i>Total fichiers téléchargés</span>
            <div class="count">255</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total utilisateur</span>
            <div class="count green">85</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i>Total administrateur</span>
            <div class="count">4</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-envelope"></i>Candidature envoyée</span>
            <div class="count">12</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-eye"></i>Nombre pages vues</span>
            <div class="count">7,325</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> depuis la semaine dernière</span>
        </div>
    </div>
    <!-- /top tiles -->


    <br />

    <button class="btn btn-default source" onclick="new PNotify({
                title: 'Que représente ces blocs ?',
                text: 'Ces blocs représentent les différentes pages du site et donc vous montrent les parties qu\'il est possible de modifier/ajouter/supprimer.',
                type: 'info',
                hide: false,
                styling: 'bootstrap3'
            });">Que représente ces blocs ?</button>

    <button class="btn btn-default source" onclick="new PNotify({
                title: 'Comment avoir des explications en image ?',
                text: 'Pour avoir des explications en image il suffit de cliquer sur le menu déroulant en haut à droite de la page puis cliquer sur <i>aide</i>.',
                type: 'info',
                hide: false,
                styling: 'bootstrap3'
            });">Comment avoir des explications en image ?</button>

    <button class="btn btn-default source" onclick="new PNotify({
                    title: 'Le menu de gauche ?',
                    text: 'Il représente également tous les endroits du site que vous pouvez modifier.',
                    type: 'info',
                    hide: false,
                    styling: 'bootstrap3'
                });">Le menu de gauche ?</button>


    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Page d'accueil</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <h4>Modification - page "accueil"</h4>
                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_principal'>Modification slider principal</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_photo_slider_secondaire'>Modification slider secondaire</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=information_entreprise'>Modification du bandeau d'information</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Qui sommes-nous ?</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <h4>Modification - page "Qui sommes-nous"</h4>
                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet'>Liste des onglets</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=ajouter_onglet_categorie'>Ajouter une catégorie</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=ajouter_onglet_sous_categorie'>Ajouter une sous catégorie</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2>Utilisateurs</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <h4>Gestion des utilisateurs</h4>
                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSections&categorie=liste_utilisateur'>Liste des utilisateurs</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_utilisateur'>Supprimer un utilisateur</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                        <div class="w_95">
                            <ul>
                                <li><span><a href='index_admin.php?cas=afficherSectionsAdmin&categorie=liste_utilisateur'>Nommer un utilisateur en Administrateur</a></span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                </div>
            </div>
        </div>

    </div>



    <!-- /page content -->
    <!-- footer content -->

    <!-- /footer content -->
</div>
</div> 


