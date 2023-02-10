<main>
    <div class="inner-form" role="form">
        <p>Connectez vous à votre Session</p>
        <fieldset>
            <legend>Adresse Mail</legend>
            <form action=<?= "log.php"?> method="post">
                <input type="email" id="mail" name="mail" placeholder="Adresse mail" aria-required="true"  autofocus>
            </form>
        </fieldset>
        <fieldset>  
            <legend>Mot de Passe</legend>
            <form>
                <input type="password" id="mdp" name="mdp" placeholder="Mdp" aria-required="true">
            </form>
        </fieldset>
        <input id="btn" type="submit" value="Envoyer" aria-label="cliquez pour envoyer">
    </div>
</main>