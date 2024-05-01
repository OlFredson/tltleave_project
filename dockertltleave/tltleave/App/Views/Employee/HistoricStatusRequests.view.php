<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  <!-- Lien bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  <!-- Lien bootstrap -->
    <link rel="stylesheet" href="\assets\css\Employee\historicStatusRequests.css">
    <link rel="stylesheet" href="\assets\css\Employee\templateEmployee.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> <!-- Script bootstrap  pour librairie, icons-->
    <title><?= $title ?></title>
</head>

<body>

    <header>
        <nav id="navbar">
            <figure class="logo">
                <a href=""><img src="\assets\images\logo1.png" alt="Logo de l'application"></a>
            </figure>
            <h1>Historique et Statut des demandes</h1>
            <section class="icon-dropdown">
                <a href=""><i class="bi bi-bell-fill"></i></a>
                
                <article class="dropdown"> <!--Bouton bootstrap dropdown menu déroulant -->
                    <div>
                        <button type="button" class="btn btn-secondary">OF</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
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

    <main class="template_container">
        <section id="sidebar">
            <ul>
                <li><a href="\Views\AdminDashboard.view.php" target="_blank"><img src="\assets\images\icons\admin\dashboard.svg" alt="logo dashboard" class="circle"></a></li>
                <li><a href="\Views\Admin\UserManagement.view.php" target="_blank"><img src="\assets\images\icons\Employee\demande_conges.svg" alt="logo gestion des utilisateurs" class="circle"></a></li>
                <li><a href="\Views\Admin\TreatmentRequests.view.php" target="_blank"><img src="\assets\images\icons\Employee\Traitement des demandes.svg" alt="logo traitement des demandes" class="circle"></a></li>
            </ul>
        </section>
        <section id="dash-container">
            <h2>Historique et Statut des demandes</h2>
            <hr>

            <!------------------------------------------------------------------------------ Part table Treatment Requests - Start ------------------------------------------------------------------->
            <article class="treatment-container">
                <div class="tabs-container">
                    <button class="tab-btn active" type="button"><a href="#">Toutes les demandes</a></button>
                    <button class="tab-btn"><a href="#">Demandes en attente de validation</a></button>
                    <button class="tab-btn"><a href="#">Demandes Validées</a></button>
                    <button class="tab-btn"><a href="#">Demandes Refusées</a></button>
                    <button class="tab-btn"><a href="#">Demandes enregistrées</a></button>
                    <hr class="hr-treatment">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Numéro</th>
                            <th scope="col">Date de la demande</th>
                            <th scope="col">Etat</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Date de début de congés</th>
                            <th scope="col">Date de fin de congés</th>
                            <th scope="col">Nbr jours</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>2024-04-23</td>
                            <td>En attente</td>
                            <td><img src="\assets\images\cards\zinedine-zidane-1.jpg" alt="" width="50vw"></td>
                            <td>2024-05-03</td>
                            <td>2024-05-11</td>
                            <td>7</td>
                            <td>Congés payés</td>
                            <td>
                                <a href=""><i class="bi bi-check2"></i></a>
                                <a href=""><i class="bi bi-x-lg"></i></a>
                                <a href=""><i class="bi bi-pencil-fill"></i></a>

                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>
    </main>        
</body>
</html>