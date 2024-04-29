<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  <!-- Lien bootstrap -->
    <link rel="stylesheet" href="\assets\css\template.css">
    <link rel="stylesheet" href="\assets\css\treatmentRequests.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> <!-- Script bootstrap  pour librairie, icons-->
    <script src="\assets\js\treatmentRequest.js"></script>
    <title><?= $title ?></title>
</head>

<body>
    <!------------------------------------------------------------------------------------------------ Header - Start ---------------------------------------------------------------------------------->
    <header>
        <nav id="navbar">
            <figure class="logo">
                <a href=""><img src="\assets\images\logo1.png" alt="Logo de l'application" width="90rem" class="logo"></a>
            </figure>
            <h1>Traitement des demandes</h1>
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
    <!------------------------------------------------------------------------------------------------ Header - End----------------------------------------------------------------------------------->

    <!-------------------------------------------------------------------------------------------- Part Sidebar - Start --------------------------------------------------------------------------------->
    <main class="treatment-container">
        <section id="sidebar">
            <ul>
                <li><a href="\Views\AdminDashboard.view.php" target="_blank"><img src="\assets\images\icons\admin\dashboard.svg" alt="logo dashboard" class="circle"></a></li>
                <li><a href="\Views\Admin\UserManagement.view.php" target="_blank"><img src="\assets\images\icons\admin\userManagement.svg" alt="logo gestion des utilisateurs" class="circle"></a></li>
                <li><a href="\Views\Admin\TreatmentRequests.view.php" target="_blank"><img src="\assets\images\icons\admin\treatmentRequests.svg" alt="logo traitement des demandes" class="circle"></a></li>
                <li><a href="\Views\Admin\Statistics.view.php" target="_blank"><img src="\assets\images\icons\admin\statistics.svg" alt="logo statistiques" class="circle"></a></li>
                <li><a href="\Views\Admin\Calendar.view.php" target="_blank"><img src="\assets\images\icons\admin\calendar.svg" alt="logo calendrier" class="circle"></a></li>
            </ul>
        </section>
    <!-------------------------------------------------------------------------------------------- Part Sidebar - End --------------------------------------------------------------------------------->

        <!---------------------------------------------------------------------------------------- Part main content - Start -------------------------------------------------------------------------->
        <section id="dash-container">
            <h2>Traitement des demandes</h2>
            <hr>
            <!------------------------------------------------------------------------------------- Part search - Start ------------------------------------------------------------------------------->
            <article id="search-sort-display">
                <input type="text" id="user-search"  name="user-search" placeholder="Rechercher par nom, maricule, etc."/>
                <label for="user-search"></label>
                <div class="sort-display">
                    <div class="sort-by">
                        <p>Trier par: </p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">Nom</option>
                            <option value="2">Matricule</option>
                            <option value="3">Profil</option>
                            <option value="4">Poste</option>
                        </select>
                    </div>
                    <div class="display-type">
                        <a href=""><i class="bi bi-grid-fill"></i></a>
                        <a href=""><i class="bi bi-list"></i></a>
                    </div>
                </div>
            </article>
            <!------------------------------------------------------------------------------------- Part search - End ------------------------------------------------------------------------------->
            
            <!------------------------------------------------------------------------------ Part table Treatment Requests - Start ------------------------------------------------------------------->
            <article class="treatment-container">
                <div class="tabs-container">
                    <button class="tab-btn active" type="button"><a href="#">Toutes les demandes</a></button>
                    <button class="tab-btn"><a href="#">Demandes en attente de validation</a></button>
                    <button class="tab-btn"><a href="#">Demandes Validées</a></button>
                    <button class="tab-btn"><a href="#">Demandes Refusées</a></button>
                    <hr class="hr-treatment">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Numéro</th>
                            <th scope="col">Employé</th>
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
                            <td>Mark lowe</td>
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
            <!------------------------------------------------------------------------------ Part table Treatment Requests - End ------------------------------------------------------------------->
        </section>
        <!---------------------------------------------------------------------------------------- Part main content - End -------------------------------------------------------------------------->
    </main>        
</body>
</html>