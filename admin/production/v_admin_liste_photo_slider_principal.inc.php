<?php

    $images = GestionAdmin::getSlider1();

 ?>



<div class="right_col" role="main">
    <div class="row">

        <p>Liste des photos du slider principal</p>
<?php foreach($images as $uneImage) {
    echo "<div class='col-md-3'>
            <div class='thumbnail'>
                <div class='image view view-first'>
                    <img style='width: 100%; display: block;' src='public/images/slider_principal/$uneImage->image' alt='image' />
                    <div class='mask'>
                        <p>$uneImage->titre</p>
                        <div class='tools tools-bottom'>
                            <a href='' data-toggle='modal' data-target='.ajout-image-slider1-$uneImage->id'><i class='fa fa-upload'></i></a>
                            <a href='' data-toggle='modal' data-target='.changer-texte-slider1-$uneImage->id'><i class='fa fa-edit'></i></a>
                        </div>
                    </div>
                </div>
                <div class='caption'>
                    <p>$uneImage->description</p>
                </div>
            </div>
        </div>";}?>
        
        <?php
        foreach($images as $uneImage){
            echo " <div class='modal fade ajout-image-slider1-$uneImage->id' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Changer l'image</h4>
            </div>
            <div class='modal-body'>
                <h4><i></i></h4>
                
                <form method='post' action='uploadFile.php' enctype='multipart/form-data'>
                <input type='file' name='icone' id='icone'>
                <input type='hidden' name='id' value='$uneImage->id'>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <input type='submit' name='submit' value='Envoyer'  class='btn btn-primary'>
            </div>
            </form>

        </div>
    </div>
        </div>"
 
     
                    
                    
                    . "<div class='modal fade changer-texte-slider1-$uneImage->id' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Changer la description / titre</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Changement de l'image du slider</i></h4>
                
                <form method='post' action='index_admin.php?cas=cacherSectionsAdmin&categorie=modifier_texte'>
                <label for='titre'>Titre de l'image :</label>
                <input type='text' id='titre' class='form-control' name='titre' value=$uneImage->titre required /><br>
                    
                <label for='titre'>Description de l'image :</label>
                <input type='text' id='description' class='form-control' name='description' value=$uneImage->description required /><br>
                <input type='hidden' name='id' value=$uneImage->id /><br>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <input type='submit' name='submit' value='Envoyer'  class='btn btn-primary'>
            </div>
            </form>

        </div>
    </div>
        </div>";
        }
        
        ?>

        
        
    </div>
</div>
