<?php $infos = GestionAdmin::getUserByMail($_SESSION['membre']); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index_admin.php?cas=afficherAccueil" class="site_title"><span>Administration Site Gaxieu</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                       <?php echo " <img src='public/admin/images/$infos->avatarUtilisateur' alt='...' class='img-circle profile_img'> ";?>
                        </div>
                        <div class="profile_info">
                            <span>Bienvenue,</span>
                            <h2><?php echo "$infos->nomUtilisateur $infos->prenomUtilisateur"; ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i>Page d'accueil<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#">Slider principal</a></li>
                                        <li><a href="index2.html">Slider Secondaire</a></li>
                                        <li><a href="index3.html">Informations entreprise</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Qui sommes-nous ? <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet">Liste des onglets</a>
                                        <li><a>Onglet catégorie<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li class="sub_menu"><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=ajouter_onglet_categorie">Ajouter une categorie</a>
                                                </li>
                                                <li class="sub_menu"><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet">Modifier une categorie</a>
                                                </li>
                                                <li class="sub_menu"><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet">Supprimer une categorie</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Onglet sous-catégorie<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li class="sub_menu"><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=ajouter_onglet_sous_categorie">Ajouter une sous-categorie</a>
                                                </li>
                                                <li class="sub_menu"><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet">Modifier une sous-categorie</a>
                                                </li>
                                                <li class="sub_menu"><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=liste_onglet">Supprimer une sous-categorie</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>       
                                <li><a><i class="fa fa-user"></i>Utilisateurs<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=liste_utilisateur">Liste des utilisateurs</a></li>
                                        <li><a href="index_admin.php?cas=afficherSectionsAdmin&categorie=valider_utilisateur">Valider un utilisateur</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

