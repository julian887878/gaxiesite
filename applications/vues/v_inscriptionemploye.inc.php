<br>

<?php
// <editor-fold defaultstate="collapsed" desc="Connexion / Inscription">
?>  


      
<form method="POST" id="main-contact-form" class="contact-form" name="contact-form" action="index.php?cas=inscription">     
 <div class="logmod">
  <div class="logmod__wrapper">
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a style="width: 100%;">Inscription</a></li>

      </ul>
      <div class="logmod__tab-wrapper">

      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Entrez les informations demander<strong> pour vous inscrire.</strong></span>
        </div> 
        <div class="logmod__form">
<form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" name="mail1" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Nom*</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Nom" name="nom" type="text" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Prénom</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Prénom" name="prenom" type="text" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Téléphone</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Téléphone" name="tel" type="text" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Poste</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Poste" name="poste" type="text" size="50" />
              </div>
            </div>
                <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Mot de passe *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Mot de passe" name="pass1" type="password" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Répéter mot de passe *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Répéter mot de passe" type="password" size="50" />
              </div>
            </div>
            <div class="simform__actions">
                <center><input class="sumbit" name="submit" type="submit" value="S'inscire" /></center>
           
            </div> 
          </form>
        </div> 
        
          </div>
      </div>
    </div>
  </div>
</div>
</form>

<?php
// </editor-fold> 
?> 
