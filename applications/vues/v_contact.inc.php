<br>
<?php
// <editor-fold defaultstate="collapsed" desc="IMPLANTATION">
        ?>
<section id="about" class="about">
    <div class="about-top">
      <div class="section-padding" style="background-color: #f9f9f9;padding-top: 25px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                  <center><h2 class="section-title" style="margin-bottom: 0px;"><span><u><b>Implantation</b></u></span></h2></center>
                  <center><p>Cliquez sur les icones pour obtenir les coordonnées de l’agence souhaitée</p></center></div></div>
              <center><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1F3ynml9IRaKZFJnfp0veVDvvClQ" width="100%" height="500"></iframe></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php
// </editor-fold> 
?>

<?php
// <editor-fold defaultstate="collapsed" desc="BANDEAU RECRUTEMENT">
        ?>
  <section id="subscribe-section" class="subscribe-section text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="bg-overlay">
      <div class="section-padding">
        <div class="container">
          <div class="wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title">Gaxieu recrute !</h2>
            <p class="section-description">
              Vous êtes intéresser pour faire partit de notre équipe ? Cliquez en dessous pour procèder a votre demande ! 
            </p>

            

              <div class="subscribe-hide">
                  <a href="index.php?cas=afficherSections&categorie=candidature"><button style="background:rgb(8, 76, 93);" type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Rejoignez-nous </button></a>
               
              </div>
             
            
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
// </editor-fold> 
?>

<?php
// <editor-fold defaultstate="collapsed" desc="FORMULAIRE DE CONTACT">
        ?>


  <section id="contact" class="contact">

                       <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                  <center><h2 class="section-title" style="margin-bottom: 0px;"><span><u><b>Envoyez votre message</b></u></span></h2></center>
                  <center><p>Besoin de nous contactez ? Besoin d'informations ? Le formulaire contact est la pour ça !</p></center></div>
      <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Site Gaxieu</label><br>
                            <SELECT class="form-control">
    <OPTION>Béziers (34)</OPTION>
    <OPTION>Alés (30)</OPTION>
    <OPTION>Sévérac (12)</OPTION>
    <OPTION>Lacaune (81)</OPTION>
    <OPTION>Cabestany (66)</OPTION>
    <OPTION>Port la Nouvelle (11)</OPTION>
    <OPTION>Montpellier (34)</OPTION>
    <OPTION>Limoux (11)</OPTION>
    <OPTION>Avignon (84)</OPTION>
    <OPTION>Lezignan (11)</OPTION>
                            </select>
                        </div>  
                        <div class="form-group">
                            <label>Nom/Prénom</label>
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
                            <label>Commune *</label>
                            <input type="text" class="form-control">
                        </div>   
                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Objet du message</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Envoyer message</button>
                        </div>
                    </div>
                </form> 
            </div>
        
    </section>
<?php
// </editor-fold> 
?>