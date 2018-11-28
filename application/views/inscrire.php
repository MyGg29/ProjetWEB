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
                echo "<i>".$this->missingfields["nom"]."</i>";
            } ?>
            <input type="text" name="nom">
            <label for="prenom">Prenom:*</label>
            <?php if(array_key_exists("prenom",$this->missingfields)){
                echo $this->missingfields["prenom"];
            } ?>
            <input type="text" name="prenom">
            <label for="pseudo">Pseudo:*</label>
            <?php if(array_key_exists("pseudo",$this->missingfields)){
                echo $this->missingfields["pseudo"];
            } ?>
            <input type="text" name="pseudo">
            <label for="mail">Adresse mail:*</label>
            <?php if(array_key_exists("mail",$this->missingfields)){
                echo $this->missingfields["mail"];
            } ?>
            <input type="text" name="mail">
            <label for="password">Mot de passe:*</label>
            <?php if(array_key_exists("password",$this->missingfields)){
                echo $this->missingfields["password"];
            } ?>
            <input type="text" name="password">
            <label for="confirmPassword">Confirmer mot de passe:*</label>
            <input type="text" name="confirmPassword">
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
            <a href="/edsa-stellarisen/connexion"><u>Déjà inscrit ? Connectez-vous !</u></a>
        </div>
    </div>
</div>