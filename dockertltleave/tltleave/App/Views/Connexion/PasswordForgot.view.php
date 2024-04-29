<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link rel="stylesheet" href="/assets/css/styleconnexion.css?v=1.0">
    <title>Mot de passe oublié</title>
</head>

<body>
    <section>
        <form action="" method="POST">
            <div class="group-container">
                <img src="/assets/images/logo1.png" alt="Logo de l'application" width="150rem">
                <h1>Mot de passe oublié</h1>
                <p>Veuillez saisir ci-dessous, votre adresse mail afin de recevoir le lien de rééinitialisation du mot de passe.</p>

                <input type="mail" id="user_mail" class="form-container" name="user_mail" placeholder="Adresse mail"/>
                <label for="user_mail"></label>

                <button type="button" class="form-container">Recevoir le lien</button>
                <a href="tltleave\App\Views\Connexion\PasswordForgot.view.php">Retour à l'écran de connexion</a>
            </div>
        </form>
    </section>
</body>
</html>