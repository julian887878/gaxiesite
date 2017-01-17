<?php
// <editor-fold defaultstate="collapsed" desc="BANDEAU NOUS RECRUTONS">
        ?>
<section id="subscribe-section" class="subscribe-section text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="bg-overlay">
        <div class="section-padding">
            <div class="container">
                <section id="about" class="about">
                    <div class="about-top">
                        <div class="section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                                            <center><h2 class="section-title"><font color="white"><b><u>Nous recrutons !</u></b></font></h2></center>
                                            <center><p><font color="white"><b>Postulez des à présents.</b></font></p></center>
                                </div>
                            </div>
                        </div>
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
// <editor-fold defaultstate="collapsed" desc="FORMULAIRE DE CANDIDATURE">
?>
<section id="contact" class="contact">
                <br><br>

    <div class="container"> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Poste recherché</label><br>
                        <SELECT class="form-control">
                            <OPTION>Maître d'oeuvre</OPTION>
                            <OPTION>Assistant Maître d'oeuvre</OPTION>
                            <OPTION>Graphiste</OPTION>
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

                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Curriculum Vitae</label>
                        <input name="cv" type="file" size="50" />
                    </div> 
                    <div class="form-group">
                        <label>Lettre de motivation</label>
                        <input name="lettre" type="file" size="50" />
                    </div>    
                    <div class="form-group">
                        <label>Remarque</label>
                        <textarea class="form-control" id="remarque" name='remarque' rows='6' placeholder="Entrez une remarque..."></textarea>
                    </div>                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Postuler</button>
                    </div>
                </div>
            </form> 
        </div>
    </div>
<br><br>
</section>
<?php
// </editor-fold> 
?>



