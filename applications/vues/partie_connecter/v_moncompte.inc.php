<br>

<section id="services" class="services text-center">
<div class="about-top">
<div class="section-padding" style="background-color: #f9f9f9;padding-top: 25px;">

<?php
// <editor-fold defaultstate="collapsed" desc="Intro de la page">
?>  
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
        <center><h2 class="section-title" style="margin-bottom: 0px;"><span><u><b>MON COMPTE</b></u></span></h2></center>
        
    </div>
    </div>
    </div>
    </div>


    <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
    <center><img src="public/images/logo.png"></center>
    </div>
    <?php if (isset($_SESSION['login_admin'])) { echo"<center><p><i class='fa fa-lock'></i><a href='index_admin.php?cas=afficherAccueil'> Administration</a></p></center>";}?>
       <center><p><i class="fa fa-arrow-circle-o-down"></i><a href="index.php?cas=afficherSectionsConnecter&categorie=echange"> Echange de fichier</a></p></center>
     
    <center><p><i class="fa fa-sign-out"></i><a href="index.php?cas=SeDeconnecter"> Se déconnecter</a></p></center>
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
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nom</label><br>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>  
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Poste</label>
                            <input type="text" class="form-control">
                        </div>   
                        
                    </div>
                    <div class="col-sm-5">
                        <br>
                        <img src="public/images/slider_secondaire/images/slider4.jpg" style="width: 75%;">  
                        
                        <div class="form-group"><br>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Modifier image</button>   
                
                           </div>
                    </div>
                     </form> 
            </div>
        
    </section>
<?php
// </editor-fold> 
?>    
</section>
          
<br>