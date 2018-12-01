<div class="loginContent">
    <h1>Connexion</h1>
    <div class="connectionBox">
        <div class="text-center">
            <img class="rounded-circle" src="https://picsum.photos/100/100" alt="icon">
        </div>
        <form action="connexion" method="post">
            <label for="mail">Adresse mail:</label>
            <input type="text" name="mail">
            <label for="password">Mot de passe:</label>
            <input type="password" name="password">
            <button type="submit" name="submit">Connexion</button>
        </form>
        <div class="text-right mt-3">
            <a href="<?=$GLOBALS["config"]["urls"]["baseUrl"]?>inscrire"><u>Pas de compte ? Inscrivez-vous !</u></a>
        </div>
    </div>
</div>