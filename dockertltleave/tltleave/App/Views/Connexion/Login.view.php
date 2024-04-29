<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="\assets\css\styleconnexion.css?v=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title><?= $title ?></title>
</head>

<body>

    <section>
        <form action="" method="POST">
            <article class="group-container">
                <figure>
                    <img src="\assets\images\logo1.png" alt="Logo de l'application" width="150rem">
                </figure>
                <h1>Authentification</h1>
                <p>Veuillez saisir votre Matricule et mot de passe</p>

                <input type="text" id="id_employee" class="form-container" name="id_employee"  placeholder="Matricule"/>
                <label for="id_employee"></label>

                <input type="text" id="user_password" class="form-container" name="user_password" placeholder="Password"/>
                <label for="user_password"></label>

                <button type="button" class="button">Login</button>
                <div class="form-items">
                    <div>
                        <input type="checkbox" id="remember" name="remember"/>
                        <label for="remember">Se rappeler de moi</label>
                    </div>
                    <a href="tltleave\App\Views\Connexion\PasswordForgot.view.php" id="forgot-pwd" target="_blank">Mot de passe oublié ?</a>
                </div>
            </article>
        </form>
        <div class="container-img">
            <img src="\assets\images\icons\user1.svg" alt="rond" class="rond">
            <img src="\assets\images\icons\Dashboard.svg" alt="calendar" class="calendar">
        </div>
    </section>
</body>
</html>