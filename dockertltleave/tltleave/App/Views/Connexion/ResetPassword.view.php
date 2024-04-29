<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link rel="stylesheet" href="/assets/css/styleconnexion.css?v=1.0">
    <title>Réinitialisation mot de passe</title>
</head>

<body>
    <section>
        <div>
            <img src="/assets/images/logo1.png" alt="Logo de l'application" width="150rem">
            <h1>Mot de passe oublié</h1>
            <p>Veuillez saisir ci-dessous, votre adresse mail afin de recevoir le lien de rééinitialisation du mot de passe.</p>
            <form action="" method="POST">
                <div class="input_container">
                    <input type="text" id="user_password" name="user_password" placeholder="Nouveau mot de passe"/>
                    <label for="user_password"></label>
                </div>

                <div class="input_container">
                    <input type="text" id="confirmation_password" name="confirmation_password" placeholder="Confirmez mot de passe"/>
                    <label for="confirmation_password"></label>
                </div>
                
                <div class="input_container">
                    <p>10 Caractères minimum</p>
                    <p>Une Majuscule mininum</p>
                    <p>Une minuscule minimum</p>
                    <p>Un chiffre minimum</p>
                    <p>Un caractère spécial minimum (!,?,@,#,$,^,&,/,\,-,+,=)</p>
                </div>
                
                <div class="input_container">
                    <button>Changement mot de passe</button>
                </div>
                <a href="tltleave\App\Views\Connexion\PasswordForgot.view.php">Retour à l'écran de connexion</a>
            </form>
            
        </div>
    </section>
</body>
</html>