<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/connexion-admin-css/style.css">
    <title>Formulaire admin</title>
</head>
<body>

    <form class="login-form" action="#" method="#">

        <div class="login-form__content">
            
            <div class="login-form__header">Connexion admin</div>
            <!-- Partie adresse mail -->
            <input class="login-form__input" type="email" name="email" placeholder="Votre adresse e-mail">
            <!-- partie mdp -->

            <input class="login-form__input" type="password" name="mdp" placeholder="Votre mot de passe">
            <!-- partie boutton d'envoie -->
            <button class="login-form__button" type="submit">Connexion</button>
          
        </div>
    </form>


</body>
</html>