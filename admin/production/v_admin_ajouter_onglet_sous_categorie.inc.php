<div class="right_col" role="main">   
    <div class="row">
        <div class="col-lg-12">
            <center><h2>Ajouter un onglet de sous catégorie correspondant à l'onglet catégorie</h2></center>
            <center><p>Cet onglet s'ajoutera dans la page <i>Qui sommes-nous ?</i> à l'interieur de l'onglet catégorie correspondant</p></center>
        </div>
    </div>
    <!-- start form for validation -->
    <form id="demo-form" data-parsley-validate>
        <label for="fullname">Titre de la sous catégorie :</label>
        <div class="row">
            <div class="col-lg-12">
                <input type="text" id="fullname" class="form-control" name="fullname" required />
            </div>
        </div><br>
        <div class='row'>
            <div class="col-lg-12">
                <label for="fullname">Categorie correspondant :</label>
                 <select id="heard" class="form-control" required>
                            <option value="">Catégorie..</option>
                            <option value="press">Categorie 1</option>
                            <option value="net">Categorie 2</option>
                            <option value="mouth">Categorie 3</option>
                          </select>
            </div>
        </div><br>
        <div class='row'>
            <div class="col-md-12 col-sm-12 col-xs-12">
              
                  <label for="fullname">Contenu :</label>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="alerts"></div>
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Taille de la police"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a data-edit="fontSize 5">
                            <p style="font-size:17px">Grande</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normale</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 1">
                            <p style="font-size:11px">Petite</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Gras (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Barré"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Souligné (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Liste de puce"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Liste de nombre"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Enlever l'indentation (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indenter (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Aligner à gauche (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Centrer (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Aligner à droite (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justifier (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Annuler (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Revenir (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                  <div id="editor" class="editor-wrapper"></div>

                  <textarea name="descr" id="descr" style="display:none;"></textarea>
                  <br />
                </div>
              </div>
        <div class="row">
            <div class='col-lg-12'>
                <center><span class="btn btn-primary">Ajouter la sous catégorie</span></center>
            </div>
        </div>
</div>
        
    </form>
    <!-- end form for validations -->

</div>



