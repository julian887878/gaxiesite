<br><br>
<?php 
if (isset($_SESSION['login_admin'])) {
$infos = GestionAdmin::getUserByMail($_SESSION['login_admin']);
}
elseif (isset($_SESSION['login_utilisateur'])) {
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

    <?php if (isset($_SESSION['login_admin'])) { echo"<p><i class='fa fa-lock'></i><a href='index_admin.php?cas=afficherAccueil'> Administration</a>";}?>
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
                      <?php echo "<img src='public/personnel/avatar/$infos->avatarUtilisateur' style='width: 40%; height: 15%;'>";  ?>
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
