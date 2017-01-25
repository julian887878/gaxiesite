<div class="right_col" role="main"> 

    <div class="row">
        <div class="col-lg-12">
            <center><h2>Modifier les informations de l'entreprise</h2></center>
        </div>
    </div><br><br>

    <div class="col-lg-3">
        <div class="x_panel tile fixed_height_520">
            <div class="x_title">
                <h2>Gauche</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h4>Icone</h4>
                <form method="post" action="index_admin.php?cas=cacherSectionsAdmin&categorie=modif_compteur_gauche">
                <select id="image" name='image' class="form-control" required>
                    <option value="">Catégorie..</option>
                    <?php
                    $Icones = GestionAdmin::getIcones();
                    foreach ($Icones as $unIcone) {
                        echo"<option value='$unIcone->codeIcone'>$unIcone->nomIcone</option>";
                    }
                    ?>
                </select><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Valeur :</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required />

                    </div>
                    <div class="clearfix"></div>
                </div><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Description :</label>
                        <input type="text" id="texte" class="form-control" name="texte" required />

                    </div>
                    <div class="clearfix"></div>
                </div><br>
                <div class="widget_summary">
                    <div class="w_95"><br>
                        <center><button type="submit" class="btn btn-primary">Modifier</button></center>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="x_panel tile fixed_height_520">
            <div class="x_title">
                <h2>Mi - Gauche</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                                <form method="post" action="index_admin.php?cas=cacherSectionsAdmin&categorie=modif_compteur_mi_gauche">
                <h4>Icone</h4>
                <select id="image" name='image' class="form-control" required>
                    <option value="">Catégorie..</option>
                    <?php
                    $Icones = GestionAdmin::getIcones();
                    foreach ($Icones as $unIcone) {
                        echo"<option value='$unIcone->codeIcone'>$unIcone->nomIcone</option>";
                    }
                    ?>
                </select><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Valeur :</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required />

                    </div>
                    <div class="clearfix"></div>
                </div><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Description :</label>
                        <input type="text" id="texte" class="form-control" name="texte" required />

                    </div>
                    <div class="clearfix"></div>
                </div><br>
                <div class="widget_summary">
                    <div class="w_95"><br>
                        <center><button type="submit" class="btn btn-primary">Modifier</button></center>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="x_panel tile fixed_height_520">
            <div class="x_title">
                <h2>Mi - Droite</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <form method="post" action="index_admin.php?cas=cacherSectionsAdmin&categorie=modif_compteur_mi_droite">
                <h4>Icone</h4>
                <select id="image" name='image' class="form-control" required>
                    <option value="">Catégorie..</option>
                    <?php
                    $Icones = GestionAdmin::getIcones();
                    foreach ($Icones as $unIcone) {
                        echo"<option value='$unIcone->codeIcone'>$unIcone->nomIcone</option>";
                    }
                    ?>
                </select><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Valeur :</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required />

                    </div>
                    <div class="clearfix"></div>
                </div><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Description :</label>
                        <input type="text" id="texte" class="form-control" name="texte" required />

                    </div>
                    <div class="clearfix"></div>
                </div><br>
                <div class="widget_summary">
                    <div class="w_95"><br>
                        <center><button type="submit" class="btn btn-primary">Modifier</button></center>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="x_panel tile fixed_height_520">
            <div class="x_title">
                <h2>Droite</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="post" action="index_admin.php?cas=cacherSectionsAdmin&categorie=modif_compteur_droite">
                <h4>Icone</h4>
                <select id="image" name='image' class="form-control" required>
                    <option value="">Catégorie..</option>
                    <?php
                    $Icones = GestionAdmin::getIcones();
                    foreach ($Icones as $unIcone) {
                        echo"<option value='$unIcone->codeIcone'>$unIcone->nomIcone</option>";
                    }
                    ?>
                </select><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Valeur :</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required />

                    </div>
                    <div class="clearfix"></div>
                </div><br>

                <div class="widget_summary">
                    <div class="w_95">
                        <label>Description :</label>
                        <input type="text" id="texte" class="form-control" name="texte" required />

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                    <div class="w_95"><br>
                        <center><button type="submit" class="btn btn-primary">Modifier</button></center>
                    </div>
                </form>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
    </div>
</div>


