<br>

<section id="services" class="services text-center">
<div class="about-top">
<div class="section-padding" style="background-color: #f9f9f9;padding-top: 25px;">

<?php
// <editor-fold defaultstate="collapsed" desc="Texte du haut 'qui somme nous' au logo">
?>  
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
        <center><h2 class="section-title" style="margin-bottom: 0px;"><span><u><b>Qui sommes-nous ?</b></u></span></h2></center>
         <?php
    $resumeraffichage = GestionAdmin::getOngletResume();
                foreach ($resumeraffichage as $unResumeAfficher) {
                    echo " 
        $unResumeAfficher->texte";}?>
</div>
    </div>
    </div>
    </div>


    <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
    <center><img src="public/images/logo.png"></center>
    </div>
       
       <?php
// </editor-fold> 
?> 
    
<?php
// <editor-fold defaultstate="collapsed" desc="Menu déroulant">
?>
        
    <div class="panel-group" id="accordion" style="margin-left: 20px;margin-right: 20px;text-align:left;">
    <div class="panel panel-default">
        
        
<!--    MENU DEROULANT 1 : NOS METIERS    -->
        
        <?php
    $categorieaffichage = GestionAdmin::getCategorie();
  

                foreach ($categorieaffichage as $uneCategorieAfficher) {
                    echo " 
    <div class='panel-heading active' style='background: #a7a6a6;'>
    <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion1' href='#collapse1$uneCategorieAfficher->id".$uneCategorieAfficher->id."'><h3 class='panel-title' style='color: black;'>  
    $uneCategorieAfficher->titre
    <i class='fa fa-angle-right pull-right'></i>  
    </h3></a>
    </div>




    <div id='collapse1$uneCategorieAfficher->id".$uneCategorieAfficher->id."' class='panel-collapse collapse'>
    <div class='panel-group' id='accordion$uneCategorieAfficher->id'>
    ";
$souscategorieaffichage = GestionAdmin::getOngletSousCategorieByCategorie($uneCategorieAfficher->id);
foreach ($souscategorieaffichage as $uneSousCategorieAfficher) {
echo"     
        
        
        
    <div class='panel panel-default'>
    <div class='panel-heading active' style='background: #e6e3e3;'>
    <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion$uneCategorieAfficher->id' href='#collapse$uneSousCategorieAfficher->id".$uneCategorieAfficher->id."'><h3 class='panel-title'>
    $uneSousCategorieAfficher->titre
    <i class='fa fa-angle-right pull-right'></i>
    </h3></a>
    </div>
    <div id='collapse$uneSousCategorieAfficher->id".$uneCategorieAfficher->id."' class='panel-collapse collapse'>
    <div class='panel-body' style='background-color: #f9f9f9;'>
    $uneSousCategorieAfficher->contenu
    </div>
    </div>
    </div>  
        ";} echo"
    </div>
    </div>";}
 ?>


<!--FIN-->
    </div>
    </div>
<?php
// </editor-fold> 
?> 
    
</section>
          
<br>