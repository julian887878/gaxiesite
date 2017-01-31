<br><br>
<?php
if (isset($_SESSION['login_admin'])) {
    $infos = GestionAdmin::getUserByMail($_SESSION['login_admin']);
} elseif (isset($_SESSION['login_utilisateur'])) {
    $infos = GestionAdmin::getUserByMail($_SESSION['login_utilisateur']);
}
?>



<section id="services" class="services text-center">

    <div class="about-top">

        <div class="section-padding" style="background-color: #f9f9f9;padding-top: 25px;">

            <?php
// <editor-fold defaultstate="collapsed" desc="Intro de la page">
            ?>  
            <center><h2 class="section-title" style="margin-bottom: 0px;"><span><u><b>MON COMPTE</b></u></span></h2>

                <img src="public/images/logo.png"></center>
            <?php if ($infos->isPersonnel == 1 or $infos->isAdmin == 1) {
                echo "<p><i class='fa fa-lock'></i><a href='' > Ajouter un client</a>";
            } ?>
<?php if (isset($_SESSION['login_admin'])) {
    echo"<p><i class='fa fa-lock'></i><a href='index_admin.php?cas=afficherAccueil'> Administration</a>";
} ?>
            <i class="fa fa-arrow-circle-o-down"></i><a href="index.php?cas=afficherSectionsConnecter&categorie=echange"> Echange de fichier</a>

            <i class="fa fa-sign-out"></i><a href="index.php?cas=SeDeconnecter"> Se déconnecter</a></p>

            <?php
// </editor-fold> 
            ?> 

<?php
// <editor-fold defaultstate="collapsed" desc="FORMULAIRE DE CONTACT">
?>


            <section id="contact" class="contact">

                <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                    <div class="row contact-wrap"> 
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="index.php?cas=modificationparametre">
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    <label>Nom</label><br>
                                    <?php echo"<input type='text' name='nom' value=\"$infos->nomUtilisateur\" class='form-control' required='required'>"; ?>
                                </div>  
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <?php echo"<input type='text' name='prenom' value=\"$infos->prenomUtilisateur\" class='form-control' required='required'>"; ?>
                                </div>
                                <div class='form-group'>
                                    <label>Email</label>
                                    <?php echo"<input type='email' name='email' value=\"$infos->emailUtilisateur\" class='form-control' required='required'>"; ?>
                                </div>
                                <div class='form-group'>
                                    <label>Téléphone</label>
                                    <?php echo"<input type='text' name='tel' value=\"$infos->telUtilisateur\" class='form-control'>"; ?>
                                </div>
                                <div class='form-group'>
                                    <label>Poste</label>
<?php echo"<input type='text' name='poste' value=\"$infos->posteUtilisateur\" class='form-control'>"; ?>
                                </div>   
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-5">
                            <br>
<?php echo "<img src='public/personnel/avatar/$infos->avatarUtilisateur' style='width: 40%; height: 15%;'>"; ?>
                            <form action="uploadAvatar.php" method="post" enctype='multipart/form-data'>
                                <div class="form-group"><br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <center><input type='file' name='icone' id='icone'></center>
                                        </div>
                                    </div><br>
                                    <div class="row">
<?php echo"<input type='hidden' name='idUtilisateur' value='$infos->idUtilisateur'> "; ?>
                                        <div class="col-sm-12">
                                            <center><input type="submit" name="submit" class="btn btn-primary btn-lg" required="required">  </center>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                    </form> 
                </div>

            </section>
<?php
// </editor-fold> 
?>    
            </section>

            <div class="modal fade" id="ajouter-client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: rgba(255, 0, 0, 0);">                      
                        <div class="modal-body">
                            <a href="" data-dismiss="modal"><img style="width: 25px;" src="public/images/test.png"></a>

                            <form method="POST" id="main-contact-form" class="contact-form" name="contact-form" action="index.php?cas=inscription">     
                                <div class="logmod">
                                    <div class="logmod__wrapper">
                                        <div class="logmod__container">
                                            <ul class="logmod__tabs">
                                                <li data-tabtar="lgm-2"><a style="width: 100%;">Inscription</a></li>

                                            </ul>
                                            <div class="logmod__tab-wrapper">

                                                <div class="logmod__tab lgm-2">
                                                    <div class="logmod__heading">
                                                        <span class="logmod__heading-subtitle">Entrez les informations demander<strong> pour vous inscrire.</strong></span>
                                                    </div> 
                                                    <div class="logmod__form">
                                                        <form accept-charset="utf-8" action="#" class="simform">
                                                            <div class="sminputs">
                                                                <div class="input full">
                                                                    <label class="string optional" for="user-name">Email*</label>
                                                                    <input class="string optional" maxlength="255" id="user-email" placeholder="Email" name="mail1" type="email" size="50" />
                                                                </div>
                                                            </div>
                                                            <div class="sminputs">
                                                                <div class="input string optional">
                                                                    <label class="string optional" for="user-pw">Nom*</label>
                                                                    <input class="string optional" maxlength="255" id="user-pw" placeholder="Nom" name="nom" type="text" size="50" />
                                                                </div>
                                                                <div class="input string optional">
                                                                    <label class="string optional" for="user-pw-repeat">Prénom</label>
                                                                    <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Prénom" name="prenom" type="text" size="50" />
                                                                </div>
                                                            </div>
                                                            <div class="sminputs">
                                                                <div class="input string optional">
                                                                    <label class="string optional" for="user-pw">Téléphone</label>
                                                                    <input class="string optional" maxlength="255" id="user-pw" placeholder="Téléphone" name="tel" type="text" size="50" />
                                                                </div>
                                                                <div class="input string optional">
                                                                    <label class="string optional" for="user-pw-repeat">Poste</label>
                                                                    <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Poste" name="poste" type="text" size="50" />
                                                                </div>
                                                            </div>
                                                            <div class="sminputs">
                                                                <div class="input string optional">
                                                                    <label class="string optional" for="user-pw">Mot de passe *</label>
                                                                    <input class="string optional" maxlength="255" id="user-pw" placeholder="Mot de passe" name="pass1" type="password" size="50" />
                                                                </div>
                                                                <div class="input string optional">
                                                                    <label class="string optional" for="user-pw-repeat">Répéter mot de passe *</label>
                                                                    <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Répéter mot de passe" type="password" size="50" />
                                                                </div>
                                                            </div>
                                                            <div class="simform__actions">
                                                                <center><input class="sumbit" name="submit" type="submit" value="S'inscire" /></center>

                                                            </div> 
                                                        </form>
                                                    </div> 

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
