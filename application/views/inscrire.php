<div class="loginContent">
    <h1>Inscription</h1>
    <div class="connectionBox">
        <form action="inscrire" enctype="multipart/form-data" method="post">
            <div class="text-center">
                <img class="rounded-circle" id="img-upload-preview" src="https://picsum.photos/100/100" alt="icon">
            </div>
            <label for="nom">Nom:*</label>
            <?php
             if(array_key_exists("nom",$this->missingfields)){
                echo "<i class='text-danger'>".$this->missingfields["nom"]."</i>";
            } ?>
            <input type="text" name="nom">
            <label for="prenom">Prenom:*</label>
            <?php if(array_key_exists("prenom",$this->missingfields)){
                echo "<i class='text-danger'>".$this->missingfields["prenom"]."</i>";
            } ?>
            <input type="text" name="prenom">
            <label for="pseudo">Pseudo:*</label>
            <?php if(array_key_exists("pseudo",$this->missingfields)){
                echo "<i class='text-danger'>".$this->missingfields["pseudo"]."</i>";
            } ?>
            <input type="text" name="pseudo">
            <label for="mail">Adresse mail:*</label>
            <?php if(array_key_exists("mail",$this->missingfields)){
                echo "<i class='text-danger'>".$this->missingfields["mail"]."</i>";
            } ?>
            <input type="text" name="mail">
            <label for="password">Mot de passe:*</label>
            <?php if(array_key_exists("password",$this->missingfields)){
                echo "<i class='text-danger'>".$this->missingfields["password"]."</i>";
            } ?>
            <input type="password" name="password">
            <label for="confirmPassword">Confirmer mot de passe:*</label>
            <input type="password" name="confirmPassword">
            <label for="sex">Je suis:</label>
            <select name="sex" id="sex">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            <label for="datenaissance">Date de naissance:</label>
            <input type="date" name="datenaissance">
            <button type="submit" name="submit">Inscription</button>
        </form>
        <div class="text-right mt-3">
            <a href="<?=$GLOBALS["config"]["urls"]["baseUrl"]?>connexion"><u>Déjà inscrit ? Connectez-vous !</u></a>
        </div>
    </div>
</div>

<!-- le modal pour quand on c'est bien inscrit-->
<div class="modal" tabindex="-1" role="dialog" id="success">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Vous vous êtes bien inscrit ! Vous pouvez maintenant vous connecter.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="fermer" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<script>
$(window).load(function(){
    if(<?= $this->reussie ? 'true' : 'false';?>){
        $("#success").show();
    }
})

$(()=>$("#fermer").click(()=>$("#success").hide()));
</script>