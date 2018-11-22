<div class="loginContent">
    <h1>Inscription</h1>
    <div class="connectionBox">
        <form action="loginController.php" method="post">
            <div class="text-center">
                <img class="rounded-circle" id="img-upload-preview" src="https://picsum.photos/100/100" alt="icon">
            </div>
            <div class="text-center">
                <label class="img-upload-label" for="img-upload"><u>Choisir un avatar</u></label>
                <input type="file" name="img-upload" id="img-upload" accept=".png, .jpeg, .jpg">
            </div>
            <label for="lname">Nom:</label>
            <input type="text" name="lname">
            <label for="fname">Prenom:</label>
            <input type="text" name="fname">
            <label for="pseudo">Pseudo:</label>
            <input type="text" name="Pseudo">
            <label for="mail">Adresse mail:</label>
            <input type="text" name="mail">
            <label for="password">Mot de passe:</label>
            <input type="text" name="password">
            <label for="confirmPassword">Confirmer mot de passe:</label>
            <input type="text" name="confirmPassword">
            <label for="sex">Je suis:</label>
            <select name="sex" id="sex">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            <label for="dateNaissance">Date de naissance:</label>
            <input type="date">
            <button type="submit">Inscription</button>
        </form>
        <div class="text-right mt-3">
            <a href="/edsa-stellarisen/connexion"><u>Déjà inscrit ? Connectez-vous !</u></a>
        </div>
    </div>
</div>
<script>
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img-upload-preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#img-upload").change(function() {
  readURL(this);
});
</script>