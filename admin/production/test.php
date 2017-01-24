<?php
    VariablesGlobales::$lesNews = GestionUsers::getDonneesNews();
    //var_dump(VariablesGlobales::$lesNews);
require 'uploadFileNews.php';
$db = new PDO('mysql:host=ent.btssio.net;dbname=delapena2', 'delapena', 'lv75b');
 ?>

    
    <div id='content'>
    <div class='container background-white'><center><h1>News</h1></center>
                    <div class='row margin-vert-30'>
                        <!-- Main Column -->
                        <div class='col-md-9'>
                                                          <?php
                                                           
                foreach (VariablesGlobales::$lesNews as $unNews) {
                        
    
    $upload = new uploadFileNews($db);
    
    if (isset($_POST[$unNews->idNews]) && !empty($_POST[$unNews->idNews])) {
        $upload->upload($_FILES, $unNews->idNews);
        
    }


    if (isset($_GET['id']) && isset($_GET['name'])) {
        $id = $unNews->idNews;
        $name = $_GET['name'];
        $upload->modif($id, $name);
    }
                    echo  "    
                            <!-- Blog Post -->
                            <div class='blog-post padding-bottom-20'>
                                <!-- Blog Item Header -->
                                <div class='blog-item-header'>
                                    <!-- Title -->

                        
                                    <h2>
                                        <a href=''>
                                            $unNews->titreNews</a>
                                    </h2>
                   
                                    <div class='clearfix'></div>
                                    <!-- End Title -->
                                </div>
                                <!-- End Blog Item Header -->
                                <!-- Blog Item Details -->
                                <div class='blog-post-details'>
                                    <!-- Author Name -->
                                    <div class='blog-post-details-item blog-post-details-item-left'>
                                        <i class='fa fa-user color-gray-light'></i>
                                        <a href='#'>$unNews->auteurNews</a>
                                    </div>
                                </div>
                                <!-- End Blog Item Details -->
                                <!-- Blog Item Body -->
                                <div class='blog'>
                                    <div class='clearfix'></div>
                                    <div class='blog-post-body row margin-top-15'>
                                        <div class='col-md-5'>
                                            <img class='margin-bottom-20' src='public/news/$unNews->photoNews' alt='imagenews'>
                                        </div>
                                        <div class='col-md-7'>
                                            <p>$unNews->contenuNews</p>
                                            
                                        </div>
                                    </div>
                                    <a href='index.php?gestion=suprNews&idNews=$unNews->idNews'><button class='btn btn-primary btn-lg' type='button'>Supprimer</button></a>
                                <form  action='' method='post' enctype='multipart/form-data'><input type='file' name='upload'/><input type='submit' value='Envoyer' name='$unNews->idNews'/></form>
                                    </div>
                                <!-- End Blog Item Body -->
                            </div>
                             <hr class='margin-top-20' style='width: 1000px;'></hr>
                            <!-- End Blog Item -->
                            ";
                            
                             }
                ?>
                            
                           
                           
                    </div>
                </div>
            </div>