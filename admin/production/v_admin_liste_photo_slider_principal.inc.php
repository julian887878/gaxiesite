<?php


    
    require 'uploadFile.php';
    $images = GestionAdmin::getSlider1();
    $db = new PDO('mysql:host=ent.btssio.net;dbname=delapena3', 'delapena', 'lv75b');
    
    $upload = new uploadFile($db);
    
    if (isset($_POST['Envoyer']) && !empty($_POST['Envoyer'])) {
        $upload->upload($_FILES, $images->id);
    }


    if (isset($_GET['id']) && isset($_GET['name'])) {
        $id = $images->id;
        $name = $_GET['name'];
        $upload->modif($id, $name);
    }
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
                            <a href='' data-toggle='modal' data-target='.ajout-image-slider1-$uneImage->id'><i class='fa fa-pencil'></i></a>
                            <a href='#'><i class='fa fa-times'></i></a>
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
                <h4 class='modal-title' id='myModalLabel2'>Ajouter une image</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Image</i></h4>
                
                <form method='post' action='' enctype'multipart/form-data'>
                <input type='file' name='upload'>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <button type='submit' value='Envoyer' name='$uneImage->id' class='btn btn-primary'>Envoyer</a>
            </div>

        </div>
    </div>
        </div>";
        }
        
        ?>

        
        
    </div>
</div>
