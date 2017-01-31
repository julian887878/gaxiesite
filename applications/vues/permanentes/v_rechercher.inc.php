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
$lesResultats = GestionAdmin::recherche(addslashes($_REQUEST['recherche']));

$nbRecherche = GestionAdmin::nbRecherche(addslashes($_REQUEST['recherche']));
if ($nbRecherche == "0"){
    echo "<center>Aucun contenu ne correspond à votre recherche</center><br><br>";
} else {
   echo "<center>Il y a $nbRecherche->nbrecherche resultats pour la recherche suivante : $laRecherche</center>"; 
   echo "<center>Votre recherche se trouve dans la page <i>Qui sommes-nous ?</i></center><br><br>";
}


foreach ($lesResultats as $unResultat){
    echo "<div class='container'>
    <div class='row'>
    <div class='col-md-12'>"
    . "<font color='#1A1741'> $unResultat->tt </font> > <font color='#6459FF'> $unResultat->titre </font> > <a href='index.php?cas=afficherSections&categorie=quisommesnous'>Voir l'article</a><br>"
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