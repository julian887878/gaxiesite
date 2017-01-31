<?php
$images = GestionAdmin::getSlider2();
?>



<div class="right_col" role="main">
    <div class="row">

        <button class="btn btn-default source" onclick="new PNotify({
                    title: 'Que représente ces photos ?',
                    text: 'Ces photos représentent l\'ensemble des photos du slider secondaire. Il est impossible d\'en rajouter cependant elles sont totalement modifiables. PS: Le slider secondaire est la deuxième galerie de photos de la page d\'accueil qui représente toutes les compétences.',
                    type: 'info',
                    hide: false,
                    styling: 'bootstrap3'
                });">Que représente ces photos ?</button>

        <button class="btn btn-default source" onclick="new PNotify({
                    title: 'Changer la photo principale d\'une catégorie',
                    text: 'Pour changer la photo principale d\'une catégorie il suffit de cliquer sur <i class=\'fa fa-upload\'></i> lors du survole de la photo à changer. Attention: Il faut absolument respecter les dimensions obligation car cela pourrait entrainer des problèmes sur le site.',
                    type: 'info',
                    hide: false,
                    styling: 'bootstrap3'
                });">Comment changer la photo principale d'une catégorie ?</button>

        <button class="btn btn-default source" onclick="new PNotify({
                    title: 'Modifier le titre d\'une compétence',
                    text: 'Pour modifier le titre d\'une compétence, il suffit de cliquer sur <i class=\'fa fa-edit\'></i> lors du survole de la photo représentant la compétence. Un formulaire prérempli apparaîtra avec les informations actuelles et il suffira des les modifier puis confirmer.',
                    type: 'info',
                    hide: false,
                    styling: 'bootstrap3'
                });">Comment modifier le titre d'une compétence ?</button>

        <button class="btn btn-default source" onclick="new PNotify({
                    title: 'Ajouter une photo dans une compétence',
                    text: 'Pour ajouter une photo dans une compétence il suffira d\'appuyer sur <i class=\'fa fa-file-image-o\'></i> lors du survole de la photo. Une fenêtre qui contiendra toutes les photos actuelles de la compétence va s\'ouvrir. Puis cliquer sur <i>Ajouter une image</i> pour en ajouter une nouvelle. Ensuite entrez les informations <i>Titre</i> et <i>Description</i> puis valider. Attention: Respecter les dimensions obligatoire de la photo.',
                    type: 'info',
                    hide: false,
                    styling: 'bootstrap3'
                });">Comment ajouter une photo dans une compétence ?</button>


        <button class="btn btn-default source" onclick="new PNotify({
                    title: 'Modifier les informations d\'une photo dans une compétence',
                    text: 'Pour modifier les informations d\'une photo qui se trouvent dans une compétence il faut d\'abord se rendre sur la fenêtre regroupant toutes les photos de la compétence choisie. Ensuite, lors du survole de la photo que l\'on veut modifier, cliquer sur  <i class=\'fa fa-file-image-o\'></i>. Une fenêtre va s\'ouvrir avec un formulaire prérempli par les informations actuelles. Il suffit donc de les changer puis valider.',
                    type: 'info',
                    hide: false,
                    styling: 'bootstrap3'
                });">Comment modifier les informations d'une photo dans une compétence ?</button>

        <button class="btn btn-default source" onclick="new PNotify({
                            title: 'Changer/Supprimer une photo dans une compétence',
                            text: 'Pour changer ou supprimer une photo qui se trouve dans une compétence il faut d\'abord se rendre sur la fenêtre regroupant toutes les photos de la compétence choisie. Ensuite, lors du survole de la photo que l\'on veut changer, cliquer sur  <i class=\'fa fa-upload\'></i>. Une fenêtre va s\'ouvrir et il suffira de rentrer la nouvelle photo en respectant les dimensions demandées. Pour supprimer la photo il faudra cliquer sur <i class=\'fa fa-close\'></i>',
                            type: 'info',
                            hide: false,
                            styling: 'bootstrap3'
                        });">Comment changer/supprimer une photo dans une compétence ?</button>
        <p>Liste des photos du slider secondaire</p>
        <?php
        foreach ($images as $uneImage) {
            echo "<div class='col-md-3'>
            <div class='thumbnail'>
                <div class='image view view-first'>
                    <img style='width: 100%; display: block;' src='public/images/slider_secondaire/images/$uneImage->image' alt='image' />
                    <div class='mask'>
                        <p>  </p>
                        <div class='tools tools-bottom'>
                            <a href='' data-toggle='modal' data-target='.ajout-image-slider2-$uneImage->id'><i class='fa fa-upload'></i></a>
                            <a href='' data-toggle='modal' data-target='.changer-texte-slider2-$uneImage->id'><i class='fa fa-edit'></i></a>
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
        <a href = '' data-toggle = 'modal' data-target = '.modif-image-popup-$uneImagePopup->idPopup'><i class = 'fa fa-upload'></i></a>
        <a href = '' data-toggle = 'modal' data-target = '.changer-image-popup-$uneImagePopup->idPopup'><i class = 'fa fa-edit'></i></a>
        <a href = '' data-toggle = 'modal' data-target = '.suppr-image-popup-$uneImagePopup->idPopup'><i class = 'fa fa-close'></i></a>
        </div>
        </div>
        </div>
        <div class = 'caption'>
        <p>$uneImagePopup->description</p>
        </div>
        </div>
</div>";
        }
        echo "</div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Fermer</button>
                          <a href = '' data-toggle = 'modal' data-target = '.ajouter-image-$uneImage->id' class='btn btn-primary'>Ajouter une image</a>
                        </div>

                      </div>
                    </div>
    </div>";
    }
    ?>

    <?php
    foreach ($images as $uneImage) {
        echo " <div class='modal fade ajout-image-slider2-$uneImage->id' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Changer l'image</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Taille Obligatoire : 1600 x 1090</i></h4>
                
                <form method='post' action='uploadFileS2.php' enctype='multipart/form-data'>
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
        . "<div class='modal fade changer-texte-slider2-$uneImage->id' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Changer la description / titre</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Changement de la description de l'image</i></h4>
                
                <form method='post' action='index_admin.php?cas=cacherSectionsAdmin&categorie=modifier_description_slider_2'>
                <label for='titre'>Titre de l'image :</label>
                <input type='text' id='titre' class='form-control' name='titre' value='$uneImage->titre' required /><br>
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
    <?php
    $lesImagesPopup = GestionAdmin::getAllImagePopup();
    foreach ($lesImagesPopup as $uneImagePop) {
        echo"
    
   <div class='modal fade modif-image-popup-$uneImagePop->idPopup' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Changer l'image</h4>
            </div>
            <div class='modal-body'>
                <h4><i>Taille Obligatoire : 1600 x 1090</i></h4>
                
                <form method='post' action='uploadFileS2Popup.php' enctype='multipart/form-data'>
                <input type='file' name='icone' id='icone'>
                <input type='hidden' name='id' value='$uneImagePop->idPopup'>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <input type='submit' name='submit' value='Envoyer'  class='btn btn-primary'>
            </div>
            </form>

        </div>
    </div>
    </div>"
        . "   <div class='modal fade suppr-image-popup-$uneImagePop->idPopup' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Supprimer l'image</h4>
            </div>
            <div class='modal-body'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Non</button>
                <a class='btn btn-primary' href='index_admin.php?cas=cacherSectionsAdmin&categorie=suppr_image_popup&idPopup=$uneImagePop->idPopup'>Supprimer</a>
            </div>
            </form>

        </div>
    </div>
    </div>"
        . "   <div class='modal fade changer-image-popup-$uneImagePop->idPopup' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>Changer les informations</h4>
            </div>
            <div class='modal-body'>
               <form method='post' action='index_admin.php?cas=cacherSectionsAdmin&categorie=modifier_texte_popup'>
                <input type='hidden' id='idPopup' name='idPopup' value='$uneImagePop->idPopup' />
                <label for='titre'>Titre :</label>
                 <input type='text' id='titre' class='form-control' name='titre' value='$uneImagePop->titre' required /><br>
                 
                  <label for='description'>Description :</label>
                 <textarea cols='30' class='ckeditor' id='description' name='description' rows='10' style='width: 94%;'>$uneImagePop->description</textarea><br>
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

    <?php
    foreach ($images as $uneImage) {
        echo "
    
     <div class='modal fade ajouter-image-$uneImage->id' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
        <div class='modal-content'>

            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                </button>
                <h4 class='modal-title' id='myModalLabel2'>ajouter une image</h4>
            </div>
            <div class='modal-body'>                
                <form method='post' action='index_admin.php?cas=cacherSectionsAdmin&categorie=ajouter_image_popup' enctype='multipart/form-data'>
                
                <label for='titre'>Titre :</label>
                 <input type='text' id='titre' class='form-control' name='titre' required /><br>
                 
                  <label for='description'>Description :</label>
                 <textarea cols='80' class='ckeditor' id='description' name='description' rows='10'></textarea>
                 
                  <label for='description'>Image (Obligatoire:1600x1090)</label>
                 <input type='hidden' name='relation' value=$uneImage->id />
                  
                <input type='file' name='icone' id='icone'>
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
<iframe width="100%" height="600" frameborder="0" marginheight="0"  
 marginwidth="0" src="http://localhost/gg/branches/site/index.php?cas=afficherAccueil"></iframe>
</div>