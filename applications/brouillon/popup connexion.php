<!-- SCRIPT POP UP INSCRIPTION ADMIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 18%">
        <div class="modal-content">                      
            <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align='center'>Connexion Administrateur</h4>
                <section id="contact" class="contact">
                    <br><br>

                    <div class="container"> 
                        <div class="row contact-wrap"> 
                            <div class="status alert alert-success" style="display: none"></div>
                            <form method="POST" id="main-contact-form" class="contact-form" name="contact-form" action="sendemail.php">
                                <div class="row">
                                    <div class="col-sm-4" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <label>Adresse mail</label><br>
                                            <input type="mail" name="mail" class="form-control" required="required">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <label>Mot de passe</label><br>
                                            <input type="password" name="password" class="form-control" required="required">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3" style="padding-left: 30px;">
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Connexion</button>
                                        </div>
                                    </div>
                                </div>

                        </div>


                        <p class="aa-lost-password"><a href="" data-dismiss="modal" aria-hidden="true" data-toggle="modal" data-target="#mdp-forgot">Mot de passe oublié ?</a></p>


                        </form>
                    </div>  
            </div>
        </div>
    </div>
</div>