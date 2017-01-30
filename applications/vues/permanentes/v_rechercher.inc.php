<br><br><section id="about" class="about">
    <div class="about-top">
      <div class="section-padding" style="background-color: #f9f9f9;padding-top: 25px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                  <center><h2 class="section-title" style="margin-bottom: 0px;"><span><u><b>Votre recherche</b></u></span></h2></center>

 <?php
 $laRecherche = $_REQUEST['recherche'];
$lesResultats = GestionAdmin::recherche($_REQUEST['recherche']);
$nbRecherche = GestionAdmin::nbRecherche($_REQUEST['recherche']);
if ($nbRecherche == "0"){
    echo "<center>Aucun contenu ne correspond à votre recherche</center>";
} else {
   echo "<center>Il y a $nbRecherche->nbrecherche resultats pour la recherche suivante : $laRecherche</center>"; 
   echo "<center>Votre recherche se trouve dans la page <i>Qui sommes-nous ?</i></center>";
}


foreach ($lesResultats as $unResultat){
    echo "<div class='container'>
    <div class='row'>
    <div class='col-md-12'>"
    . "$unResultat->titre <br>"
        . "</div></div></div>";
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>