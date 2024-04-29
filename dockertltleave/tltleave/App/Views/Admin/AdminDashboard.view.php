<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link rel="stylesheet" href="\assets\css\template.css">
    <link rel="stylesheet" href="\assets\css\adminDashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  <!-- Lien bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> <!-- Script bootstrap  pour librairie, icons-->
    <title><?= $title ?></title>
</head>

<body>

    <header>
        <nav id="navbar">
            <figure class="logo">
                <a href=""><img src="\assets\images\logo1.png" alt="Logo de l'application" width="120rem"></a>
            </figure>
            <h1>Dashboard</h1>
            <section class="icon-dropdown">
                <a href=""><i class="bi bi-bell-fill"></i></a>
                
                <article class="dropdown"> <!--Bouton bootstrap dropdown menu déroulant -->
                    <div>
                        <button type="button" class="btn btn-secondary">OF</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-compact-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" target="_blank"><i class="bi bi-file-text"></i> Mes informations</a></li>
                            <li><a class="dropdown-item" href="#" target="_blank"><i class="bi bi-gear"></i> Parametres</a></li>
                            <hr>
                            <li><button type="button" class="btn btn-light dropdown-btn">Se deconnecter</button></li>
                        </ul>
                    </div>
                </article>
            </section>
        </nav>
    </header>

    <main class="container">
        <section id="sidebar">
            <ul>
                <li><a href="\Views\AdminDashboard.view.php" target="_blank"><img src="\assets\images\icons\admin\dashboard.svg" alt="logo dashboard" class="circle"></a></li>
                <li><a href="\Views\Admin\UserManagement.view.php" target="_blank"><img src="\assets\images\icons\admin\userManagement.svg" alt="logo gestion des utilisateurs" class="circle"></a></li>
                <li><a href="\Views\Admin\TreatmentRequests.view.php" target="_blank"><img src="\assets\images\icons\admin\treatmentRequests.svg" alt="logo traitement des demandes" class="circle"></a></li>
                <li><a href="\Views\Admin\Statistics.view.php" target="_blank"><img src="\assets\images\icons\admin\statistics.svg" alt="logo statistiques" class="circle"></a></li>
                <li><a href="\Views\Admin\Calendar.view.php" target="_blank"><img src="\assets\images\icons\admin\calendar.svg" alt="logo calendrier" class="circle"></a></li>
            </ul>
        </section>
        <section id="dash-container">
            <h2>Dashboard</h2>
            <hr>
            <article class="grid-container">
                <div class="grid-item user-mgmt">
                    <h3>Gestion des utlisateurs</h3>
                    <div class="grid-users-container">
                        <h4 class="grid-admin"><a href="">Administrateurs</a></h4>
                        <h4 class="grid-employee"><a href="">Collaborateurs</a></h4>
                        <div class="grid-user1">
                            <a href=""><p>Thierry Henry</p></a>
                            <p>Developpeur Full-stack</p>
                        </div>
                        <div class="grid-user2">
                            <p><a href="">Zinedine Zidane</a></p>
                            <p>Developpeur Front-End</p>
                        </div>
                        <p class="grid-add">Ajouter Admins</p>
                        <a href=""><i class="bi bi-plus-lg grid-plus"></i></a>
                    </div>

                </div>
                <div class="grid-item grid-treatment">
                    <h3>Traitement des demandes</h3>
                    <div class="grid-treatment-items">
                        <h4 class="item-pending">En attente</h4>
                        <div class="circle-pending"></div>
                        <div class="separation1"></div>
                        <h4 class="item-validated">Validées</h4>
                        <div class="circle-validated"></div>
                        <div class="separation2"></div>
                        <h4 class="item-refused">Refusées</h4>
                        <div class="circle-refused"></div>
                    </div>
                </div>
                <div class="grid-item statistics">
                    <h3>Statistiques</h3>
                </div>
                <div class="grid-item calendar">
                    <h3>Calendrier de presence</h3>
                </div>
            </article>
        </section>
    </main>        
</body>
</html>