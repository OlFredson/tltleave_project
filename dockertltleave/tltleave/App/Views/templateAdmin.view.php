<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Lien bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> <!-- Script bootstrap  pour librairie, icons-->
    <link rel="stylesheet" href="\assets\css\template.css">
    <link rel="stylesheet" href="\assets\css\Admin\adminDashboard.css">
    <link rel="stylesheet" href="\assets\css\treatmentRequests.css">
    <link rel="stylesheet" href="\assets\css\Admin\userManagment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Lien bootstrap -->
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <nav id="navbar">
            <figure class="logo">
                <a href=""><img src="\assets\images\logo1.png" alt="Logo de l'application"></a>
            </figure>
            <h1><?= $title ?></h1>
            <section class="icon-dropdown">
                <a href=""><i class="bi bi-bell-fill"></i></a>

                <article class="dropdown"> <!--Bouton bootstrap dropdown menu déroulant -->
                    <div>
                        <button type="button" class="btn btn-secondary">OF</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" target="_blank"><i class="bi bi-file-text"></i> Mes
                                    informations</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank"><i class="bi bi-gear"></i>
                                    Parametres</a></li>
                            <hr>
                            <li><button type="button" class="btn btn-light dropdown-btn">Se deconnecter</button></li>
                        </ul>
                    </div>
                </article>
            </section>
        </nav>
    </header>

    <main>
        <section id="sidebar">
            <ul>
                <li><a href="<?= URL ?>dashboard"><img src="assets/images/icons/Admin/dashboard.svg"
                            alt="logo dashboard" class="circle"></a></li>
                <li><a href="<?= URL ?>usermanagement"><img src="assets/images/icons/admin/userManagement.svg"
                            alt="logo gestion des utilisateurs" class="circle"></a></li>
                <li><a href="<?= URL ?>treatmentrequests"><img src="assets/images/icons/admin/treatmentRequests.svg"
                            alt="logo traitement des demandes" class="circle"></a></li>
                <li><a href="<?= URL ?>statistics"><img src="assets/images/icons/admin/statistics.svg"
                            alt="logo statistiques" class="circle"></a></li>
                <li><a href="<?= URL ?>calendar"><img src="assets/images/icons/admin/calendar.svg" alt="logo calendrier"
                            class="circle"></a></li>
            </ul>
        </section>
        <section id="dash-container">
            <?= $content ?>
        </section>
    </main>

</body>

</html>