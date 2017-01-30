<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<html class="no-js" lang="">
<head>

<?php
// <editor-fold defaultstate="collapsed" desc="BALISES META & TITLE">
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cabinet d'étude GAXIEU - ALES BEZIERS CABESTANY LIMOUX MILLAU</title>
        <meta name="description" content="Gaxieu">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="public/images/icon/logo.ico" />
        <?php // </editor-fold> 
?>

<?php
// <editor-fold defaultstate="collapsed" desc="TOUS LES CSS">
        ?>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">

        <!-- Style CSS -->
        <link rel="stylesheet" href="public/assets/css/style.css">

        <!-- Component CSS -->
        <link rel="stylesheet" href="public/assets/css/component.css">

        <!--ICONE RESPONSIVE & MENU GAXIEU LOGO-->
        <link rel="stylesheet" href="public/assets/css/demo.css">
        <link rel="stylesheet" href="public/assets/css/normalize.css">

        <!--ICONE-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!--COULEUR MENU-->
        <script src="public/assets/js/modernizr.custom.js"></script>

        <!--CSS SLIDER 2-->

        <link rel="stylesheet" type="text/css" href="public/assets/css/slider_secondaire/style.css" />
        <script type="text/javascript" src="public/assets/js/slider_secondaire/jquery.js"></script>


        <!--CSS SLIDER 1--> 
        <link rel="stylesheet" type="text/css" href="public/assets/css/slider_principal/demo.css" />
        <link rel="stylesheet" type="text/css" href="public/assets/css/slider_principal/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
        <noscript>
        <link rel="stylesheet" type="text/css" href="public/assets/css/slider_principal/noscript.css" />
        </noscript>
        
        
        <!--POPUP GALERY-->

<link rel="stylesheet" href="public/popup_galery/assets/animate/animate.css" />
<link rel="stylesheet" href="public/popup_galery/assets/animate/set.css" />

<link rel="stylesheet" href="public/popup_galery/assets/gallery/blueimp-gallery.min.css">

<!--LIGHTBOX-->
<link rel="stylesheet" href="public/popup_lightbox/assets/css/main.css" />
                
        <?php // </editor-fold> 
?>
                
</head>
<body onload="load()">
    
<?php
// <editor-fold defaultstate="collapsed" desc="PAGE DE CHARGEMENT">
?>
        <div class="loader" id="loader">
            <center style="padding-top: 27%;"><div id="ballsWaveG">
                    <div id="ballsWaveG_1" class="ballsWaveG"></div>
                    <div id="ballsWaveG_2" class="ballsWaveG"></div>
                    <div id="ballsWaveG_3" class="ballsWaveG"></div>
                    <div id="ballsWaveG_4" class="ballsWaveG"></div>
                    <div id="ballsWaveG_5" class="ballsWaveG"></div>
                    <div id="ballsWaveG_6" class="ballsWaveG"></div>
                    <div id="ballsWaveG_7" class="ballsWaveG"></div>
                    <div id="ballsWaveG_8" class="ballsWaveG"></div>
                </div>
        </div><br></center>
<?php // </editor-fold> 
?>  
            
<div id="site">        
<header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
    
<?php
// <editor-fold defaultstate="collapsed" desc="MENU PRINCIPAL">
            ?>
            <div class="container2">
                <ul id="gn-menu" class="gn-menu-main">
                    <li class="gn-trigger">
                        <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                        <nav class="gn-menu-wrapper" style="background-color: #e6e3e3;">
                            <div class="gn-scroller">
                                <ul class="gn-menu">
                                    <li class="gn-search-item" style="width: 100%;">
                                        <form method="post" action="index.php?cas=rechercherSections" > 
                                        <input placeholder="Rechercher..." type="text" name="recherche" class="gn-search">
                                        <input type="submit" style="display: none;">
                                        <a class="gn-icon gn-icon-search"><span>Rechercher...</span></a></form>
                                    </li>

                                    <li style="width: 100%;"><a href="index.php?cas=afficherSectionsConnecter&categorie=echange" class="gn-icon gn-icon-download" style="width: 100%;">Echange de fichier</a></li>

                                    <li style="width: 100%;"><a href="index.php?cas=afficherSections&categorie=candidature" class="gn-icon gn-icon-archive" style="width: 100%;">Candidature</a></li>
                                    <li style="width: 100%;"><?php if (isset($_SESSION['login_utilisateur']) or isset($_SESSION['login_admin'])) { echo"<a href='index.php?cas=afficherSectionsConnecter&categorie=moncompte'  class='gn-icon gn-icon-earth' style='width: 100%;'>Mon compte</a>";} else { echo"<a href='index.php?cas=afficherSections&categorie=connexion'  class='gn-icon gn-icon-cog' style='width: 100%;'>Se connecter</a>";}?></li>
                                </ul>

                                </br>
                                <ul style="background:#e6e3e3;">
                                    <center><img src="public/images/logo.png"/></center>
                                </ul>
                            </div>
                        </nav>
                    </li>
                    <li><a class="codrops-icon codrops-icon-prev" href="index.php?cas=afficherAccueil"><img src="public/images/icon/accueil.png" style="width:16px;"/><span> Accueil</span></a></li>
                    <li><a class="codrops-icon codrops-icon-prev" href="index.php?cas=afficherSections&categorie=quisommesnous"><img src="public/images/icon/qui.png" style="width:16px;"/><span> Qui sommes-nous ?</span></a></li>
                    <li><a class="codrops-icon codrops-icon-prev" href="index.php?cas=afficherSections&categorie=contact"><img src="public/images/icon/contact.png" style="width:16px;"/><span> Nous contacter</span></a></li>


                </ul>
            </div>

            <?php // </editor-fold> 
?>

</header>
