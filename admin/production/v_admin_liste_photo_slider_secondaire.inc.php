<?php
$images = GestionAdmin::getSlider2();
?>



<div class="right_col" role="main">
    <div class="row">

        <p>Liste des photos du slider principal</p>
        <?php
        foreach ($images as $uneImage) {
            echo "<div class='col-md-3'>
            <div class='thumbnail'>
                <div class='image view view-first'>
                    <img style='width: 100%; display: block;' src='public/images/slider_secondaire/images/$uneImage->image' alt='image' />
                    <div class='mask'>
                        <p>  </p>
                        <div class='tools tools-bottom'>
                            <a href='' data-toggle='modal' data-target='.ajout-image-slider1-$uneImage->id'><i class='fa fa-upload'></i></a>
                            <a href='' data-toggle='modal' data-target='.changer-texte-slider1-$uneImage->id'><i class='fa fa-edit'></i></a>
                            <a href='' data-toggle='modal' data-target='.ajouter-image-popup-$uneImage->id'><i class='fa fa-file-image-o'></i></a>
                        </div>
                    </div>
                </div>
                <div class='caption'>
                    <p>$uneImage->titre</p>
                </div>
            </div>
        </div>";
        }
        ?>
    </div>
    <?php
    foreach ($images as $uneImage) {
        $imagesPopup = GestionAdmin::getImagePopup($uneImage->id);
        echo "
                  <div class='modal fade ajouter-image-popup-$uneImage->id tabindex='-1' role='dialog' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                      <div class='modal-content'>

                        <div class='modal-header'>
                          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>×</span>
                          </button>
                          <h4 class='modal-title' id='myModalLabel'>Images de $uneImage->titre</h4>
                        </div>
                        <div class='modal-body'>";
        foreach ($imagesPopup as $uneImagePopup) {
            echo" 

        <div class = 'col-md-3'>
        <div class = 'thumbnail'>
        <div class = 'image view view-first'>
        <img style = 'width: 100%; display: block;' src = 'public/images/popup_lightbox/$uneImagePopup->image' alt = 'image' />
        <div class = 'mask'>
        <p> </p>
        <div class = 'tools tools-bottom'>
        <a href = '' data-toggle = 'modal' data-target = '.ajout-image-slider1-'><i class = 'fa fa-upload'></i></a>
        <a href = '' data-toggle = 'modal' data-target = '.changer-texte-slider1-'><i class = 'fa fa-edit'></i></a>
        </div>
        </div>
        </div>
        <div class = 'caption'>
        <p></p>
        </div>
        </div>
</div>";
        }
        echo "</div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                          <button type='button' class='btn btn-primary'>Save changes</button>
                        </div>

                      </div>
                    </div>
    </div>";
    }
    ?>
</div>