
<!-- Footer Section -->
<footer id="colophon" class="footer site-footer" role="contentinfo">
    <div class="footer-top">
        <div class="section-padding" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="widget widget_menu">
                            <h3 class="widget-title">Plan du site</h3>
                            <div class="widget-details">
                                <nav>
                                    <ul>
                                        <li><a href="#">Accueil</a></li>
                                        <li><a href="#">Qui sommes-nous ?</a></li>
                                        <li><a href="#">Nous contacter</a></li>
                                        <li><a href="#">Rubrique 1</a></li>
                                        <li><a href="#">Rubrique 2</a></li>
                                        <li><a href="#">Rubrique 3</a></li>
                                        <li><a href="#">Demande d'emploie</a></li>
                                        <li><a href="index_admin.php?cas=afficherAccueil">Administration</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="widget widget_latest-blog-post">
                            <div id="likebox-wrapper">                                   
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGaxieuIngenierie%2F%3Ffref%3Dts&tabs=timeline&width=500&height=285&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="285" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div class="g-page" data-width="150" data-href="https://plus.google.com/103424025466410382627" data-rel="publisher"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- SOUS FOOTER -->
    <div class="footer-bottom" style="border-bottom-width: 0px;">
        <div class="container">
            <div class="footer-menu pull-left">
                <div class="widget widget_menu">
                    <nav class="widget-menu">
                        <ul>
                            <li style="display: inline-block;"><a href="#">Accueil</a></li>
                            <li style="display: inline-block;"><a href="#">Contact</a></li>
                            <li style="display: inline-block"><a href="#" data-toggle="modal" data-target="#co-admin">Connexion</a></li> 
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="copy-right pull-right"></div>

        </div>
    </div>
</footer>



<!-- FLECHE REMONTANTE -->
<div id="scroll-to-top" class="scroll-to-top" style="z-index: 1049;">
    <span>
        <i class="fa fa-chevron-up"></i>    
    </span>
</div>

<?php
// <editor-fold defaultstate="collapsed" desc="Script JAVA/JQUERY">
?>
<!-- SCRIPT POP UP INSCRIPTION ADMIN -->
<div class="modal fade" id="co-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 18%">
        <div class="modal-content">                      
            <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align='center'>Connexion Administrateur</h4>
                <section id="contact" class="contact">
                    <br><br>

                    <div class="container"> 
                        <div class="row contact-wrap"> 
                            <div class="status alert alert-success" style="display: none"></div>
                            <form method="POST" id="main-contact-form" class="contact-form" name="contact-form" action="index_admin.php?cas=cacherSectionsAdmin&categorie=verifier_connexion">
                                <div class="row">
                                    <div class="col-sm-4" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <label>Adresse mail</label><br>
                                            <input type="emailUtilisateur" name="emailUtilisateur" class="form-control" required="required">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <label>Mot de passe</label><br>
                                            <input type="mdpUtilisateur" name="mdpUtilisateur" class="form-control" required="required">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Connexion</button>
                                        </div>
                                    </div>
                                </div>

                        </div>


                        <p class="aa-lost-password"><a href="" data-dismiss="modal" aria-hidden="true" data-toggle="modal" data-target="#mdp-forgot">Mot de passe oublié ?</a></p>


                        </form>
                    </div>  
            </div>
        </div>
    </div>
</div>
<!-- DEBUT - Facebook intégration -->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<!-- UTILE POUR LA POP UP -->
<script>window.jQuery || document.write('<script src="public/assets/js/jquery-1.11.2.min.js"><\/script>')</script>



<!-- Include Custom Js </-->
<script src="public/assets/js/custom.min.js"></script>



<!-- SCRIPT MENU PRINCIPAL -->
<script src="public/assets/js/classie.js"></script>
<script src="public/assets/js/gnmenu.js"></script>
<script>
    new gnMenu(document.getElementById('gn-menu'));
</script>



<!-- SCRIPT POUR CHARGEMENT -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $(".loader").fadeOut("1000");
        $(".site").fadeIn("1000");
    })
</script>



<!-- GOOGLE PLUS -->
<script type="text/javascript">
    window.___gcfg = {lang: 'fr'};

    (function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>




<!-- SCRIPT POP UP GALLERY -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgba(255, 0, 0, 0);">                      
            <div class="modal-body">

<div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/photogroupe.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Aménagement</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
                <a href="#" data-toggle="modal" data-target="#co-admine" data-dismiss="modal">Voir plus</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/ville2.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Ouvrages techniques</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/ville4.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Ouvrages de traitement</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/ville5.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Réseaux humides et secs</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/slider1.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Eolien</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/slider2.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Urbanisme juridique et opérationnel</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/slider3.jpg"/>
        <figcaption>
           <?php  $test = "<h2>Etudes hydrauliques, modélisation, dossiers règlementaires</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/slider4.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Infographies, vidéos</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/slider5.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Assistance à maîtrise d’ouvrage</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="public/images/slider_secondaire/images/slider6.jpg"/>
        <figcaption>
            <?php  $test = "<h2>Digues et barrages</h2>"; $longueur = (strlen($test));  if ($longueur >= 35){echo substr($test,0, 35)."...";}else{echo $test;} ?>
            <p><br>
            <a href="#">Voir plus</a></p>            
        </figcaption>
    </figure>
  
</div>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>   
</div>
   
            </div>
        </div>
    </div>
</div>

<script src="popup_galery/assets/mobile/touchSwipe.min.js"></script>
<script src="popup_galery/assets/respond/respond.js"></script>

<script src="popup_galery/assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- SCRIPT POP UP LIGHTBOX -->
<div class="modal fade" id="co-admine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">                      
            <div class="modal-body">

                <button data-toggle="modal" data-target="#login-modal" data-dismiss="modal" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align='center'>Connexion Administrateur</h4>
                <section id="contact" class="contact">
                    <br><br>

                    <div class="container"> 
                        <div class="row contact-wrap"> 
                            <div class="status alert alert-success" style="display: none"></div>
                            <form method="POST" id="main-contact-form" class="contact-form" name="contact-form" action="index_admin.php?cas=cacherSectionsAdmin&categorie=verifier_connexion">
                                <div class="row">
                                    <div class="col-sm-4" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <label>Adresse mail</label><br>
                                            <input type="mail" name="mail" class="form-control" required="required">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <label>Mot de passe</label><br>
                                            <input type="password" name="password" class="form-control" required="required">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Connexion</button>
                                        </div>
                                    </div>
                                </div>

                        </div>


                        <p class="aa-lost-password"><a href="" data-dismiss="modal" aria-hidden="true" data-toggle="modal" data-target="#mdp-forgot">Mot de passe oublié ?</a></p>


                        </form>
                    </div>  
            </div>
        </div>
    </div>
</div>



    <!--SCRIPT SLIDER 2--> 
<script type="text/javascript" src="public/assets/js/slider_secondaire/wowslider.js"></script>
<script type="text/javascript" src="public/assets/js/slider_secondaire/script.js"></script>

    <!--SCRIPT SLIDER 1--> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="public/assets/js/slider_principal/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="public/assets/js/slider_principal/jquery.easing.1.3.js"></script>
    <script type="text/javascript">
    $(function () {
        $('#ei-slider').eislideshow({
            animation: 'center',
            autoplay: true,
            slideshow_interval: 3000,
            titlesFactor: 0
        });
    });
    </script>

   
    <?php
// </editor-fold> 
    ?>      

</body>
</html>
