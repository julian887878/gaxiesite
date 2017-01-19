
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                     <?php echo "<img src='public/admin/images/$infos->avatarUtilisateur' alt=''>$infos->nomUtilisateur $infos->prenomUtilisateur" ; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="index.php?cas=afficherAccueil">Retour vers le site</a></li>
                                        <li><a href="javascript:;">Profil</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span>Paramètres</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Aide</a></li>
                                        <li><a href="index.php?cas=SeDeconnecter"><i class="fa fa-sign-out pull-right"></i>Deconnexion</a></li>
                                    </ul>
                                </li>
                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">0</span>
                                    </a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->