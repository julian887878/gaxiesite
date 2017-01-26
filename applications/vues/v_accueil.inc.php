<br>
<?php
// <editor-fold defaultstate="collapsed" desc="SLIDER 1">
?>
<!--pour enlever le zoom enlever le margin-top et mettre height a 100%-->

<div class="wrapper">
    <div id="ei-slider" class="ei-slider"> 
        <ul class="ei-slider-large">
 <?php
    $slider1affichage = GestionAdmin::getSlider1();
                foreach ($slider1affichage as $unSlider1afficher) {
                echo "<li>
                <img src='public/images/slider_principal/$unSlider1afficher->image' />
                <div class='ei-title'>
                    <h2 style='text-align: center;'>$unSlider1afficher->titre</h2>
                    <h3 style='text-align: center;'>$unSlider1afficher->description</h3>
                </div>
            </li> ";}?>
        </ul>
        <ul class="ei-slider-thumbs">
            <li class="ei-slider-element"></li>
             <?php
                foreach ($slider1affichage as $unSlider1afficher) {
                echo "<li><a href='#'></a><img src='public/images/slider_principal/$unSlider1afficher->image'/></li>";}
                ?>
            
        </ul>
    </div>
</div>
<?php
// </editor-fold> 
?>

<?php
// <editor-fold defaultstate="collapsed" desc="BANDEAU COMPETENCES">
?>
<section id="subscribe-section" class="subscribe-section text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="bg-overlay" style="background: #5f6f81;">
        <div class="section-padding" style="padding-top: 60px;padding-bottom: 60px;">
            <div class="container">
                <section id="about" class="about">
                    <div class="about-top">
                        <div class="section-padding" style="padding-bottom: 0px;padding-top: 0px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                                            <center> <img src="public/images/logo.png" style="padding-bottom: 3px;"/></center><center><a href="#competences"><button style="background:rgb(8, 76, 93);border-color: #25364a;" type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Voir nos compétences</button></a></center>
                                        </div><section id="competences"></section>
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
// <editor-fold defaultstate="collapsed" desc="SLIDER 2">
?>
<div id="wowslider-container1">
    <div class="ws_images">
    <ul>
<?php
    $slider2affichage = GestionAdmin::getSlider2();
    $i = 0;
                foreach ($slider2affichage as $unSlider2afficher) {
                echo "<li><a href='#' data-toggle='modal' data-target='#login-modal'><img src='public/images/slider_secondaire/images/$unSlider2afficher->image' title='$unSlider2afficher->titre' id='wows1_$i'/></a></li>";
                $i = $i + 1;
                }?>
    </ul>
</div>
	<div class="ws_thumbs">
<div>
    <?php
                foreach ($slider2affichage as $unSlider2afficher) {
                echo "<a href='#' title='$unSlider2afficher->titre'><img src='public/images/slider_secondaire/images/$unSlider2afficher->image' /></a>
		";
                
                }?>
		</div>
</div>
</div>	
<?php
// </editor-fold> 
?>
                
<?php
// <editor-fold defaultstate="collapsed" desc="COMPTEUR">
?>
<div class="about-middle">
    <div class="about-breifing">
        
        <?php
    $compteurAffichage = GestionAdmin::getCompteur();
                foreach ($compteurAffichage as $unCompteurAfficher) {
                echo "
        <div class='col-md-3 col-sm-6'>
            <div class='item media wow animated fadeInLeft' data-wow-delay='.35s'>
                <div class='section-padding'>
                    <div class='item-no media-left' style='padding-right: 20px;'>
                        <span class='count text-right'> $unCompteurAfficher->image</span>
                    </div>
                    <div class='item-details media-body text-center'>
                        <div class='item-icon'>
                            <span class='count-number counter'>$unCompteurAfficher->nombre</span>
                        </div>
                        <div class='countdown'>
                            <span class='about-item'>$unCompteurAfficher->texte</span>
                        </div>
                    </div>
                </div>
            </div>
                </div>";}?>

    </div>
</div>

<?php
// </editor-fold> 
?>
           
<?php
// <editor-fold defaultstate="collapsed" desc="JS ANCRAGE & LIGHTBOX">
?>               
    <!--ANIMATION ANCRAGE-->
<script type="text/javascript">
function juizScrollTo(element){			
	$(element).click(function(){
		var goscroll = false;
		var the_hash = $(this).attr("href");
		var regex = new RegExp("\#(.*)","gi");
		var the_element = '';
 
		if(the_hash.match("\#(.+)")) {
			the_hash = the_hash.replace(regex,"$1");
 
			if($("#"+the_hash).length>0) {
				the_element = "#" + the_hash;
				goscroll = true;
			}
			else if($("a[name=" + the_hash + "]").length>0) {
				the_element = "a[name=" + the_hash + "]";
				goscroll = true;
			}
 
			if(goscroll) {
				$('html, body').animate({
					scrollTop:$(the_element).offset().top
				}, 'slow');
				return false;
			}
		}
	});					
};
juizScrollTo('a[href^="#"]');
</script>
<!--LIGHTBOX--> 
<script src="public/popup_lightbox/assets/js/skel.min.js"></script>
<?php
// </editor-fold> 
?>