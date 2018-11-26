<div class="moncompteContent">
    <h1>Mon Compte</h1>
    <div class="moncompteBox">
        <form action="connexion" enctype="multipart/form-data" method="post">
            <div class="text-center">
                <img class="rounded-circle" id="img-upload-preview" src="<?=$this->avatarPath?>" alt="icon">
            </div>
            <div class="text-center">
                <label class="img-upload-label" for="img-upload"><u>Choisir un avatar</u></label>
                <input type="file" name="img-upload" id="img-upload" accept=".png, .jpeg, .jpg">
            </div>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?=$_SESSION["nom"]?>">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" value="<?=$_SESSION["prenom"]?>">
            <label for="mail">Adresse mail:</label>
            <input type="text" name="mail" value="<?=$_SESSION["usermail"]?>">
            <label for="pseudo">Pseudo:</label>
            <input type="text" name="pseudo" value="<?=$_SESSION["pseudo"]?>">
            <label for="password">Modifier mot de passe:</label>
            <input type="password" type="password" name="password">
            <button type="submit" name="submit">Modifier</button>
        </form>
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