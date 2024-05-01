<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link rel="stylesheet" href="\assets\css\template.css">
    <link rel="stylesheet" href="\assets\css\Admin\userManagment.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  <!-- Lien bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> <!-- Script bootstrap  pour librairie, icons-->
    <title><?= $title ?></title>
</head>

<body>

    <header>
        <nav id="navbar">
            <figure class="logo">
                <a href=""><img src="\assets\images\logo1.png" alt="Logo de l'application" width="120rem"></a>
            </figure>
            <h1>Gestion des utilisateurs</h1>
            <section class="icon-dropdown">
                <i class="bi bi-bell-fill"><a href="#"></a></i>
                
                <article class="dropdown"> <!--Bouton bootstrap dropdown menu déroulant -->
                    <div>
                        <button type="button" class="btn btn-secondary">OF</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-compact-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><i class="bi bi-file-text"><a class="dropdown-item" href="#" target="_blank">Mes information</a></i> s</li>
                            <li><a class="dropdown-item" href="#" target="_blank"><i class="bi bi-gear"></i> Parametres</a></li>
                            <hr>
                            <li><button type="button" class="btn btn-light dropdown-btn">Se deconnecter</button></li>
                        </ul>
                    </div>
                </article>
            </section>
        </nav>
    </header>

            

    <main class="usermgmt-container">

        <!------------------------------------------------------------------------------------- Part Sidebar ------------------------------------------------------------------------------->
        <section id="sidebar">
            <ul>
                <li><a href="\Views\AdminDashboard.view.php" target="_blank"><img src="\assets\images\icons\admin\dashboard.svg" alt="logo dashboard" class="circle"></a></li>
                <li><a href="\Views\Admin\UserManagement.view.php" target="_blank"><img src="\assets\images\icons\admin\userManagement.svg" alt="logo gestion des utilisateurs" class="circle"></a></li>
                <li><a href="\Views\Admin\TreatmentRequests.view.php" target="_blank"><img src="\assets\images\icons\admin\treatmentRequests.svg" alt="logo traitement des demandes" class="circle"></a></li>
                <li><a href="\Views\Admin\Statistics.view.php" target="_blank"><img src="\assets\images\icons\admin\statistics.svg" alt="logo statistiques" class="circle"></a></li>
                <li><a href="\Views\Admin\Calendar.view.php" target="_blank"><img src="\assets\images\icons\admin\calendar.svg" alt="logo calendrier" class="circle"></a></li>
            </ul>
        </section>

        <!------------------------------------------------------------------------------------- Part Sidebar ------------------------------------------------------------------------------->


        <!--------------------------------------------------------------------------------- Part button add users  -------------------------------------------------------------------------->
        <section id="dash-container">
            <h2>Gestion des utilisateurs</h2>
            <article id="btn-add">
                <button type="button">Ajouter Administrateur</button>
                <button type="button">Ajouter Collaborateur</button>
            </article>
            <hr>
        <!---------------------------------------------------------------------------------- Part button add users  -------------------------------------------------------------------------->


            <!------------------------------------------------------------------------------------- Part search ------------------------------------------------------------------------------->
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
                        <i class="bi bi-grid-fill"></i>
                        <i class="bi bi-list"></i>
                    </div>
                </div>
            </article>
            <!------------------------------------------------------------------------------------- Part search ------------------------------------------------------------------------------->

            <!------------------------------------------------------------------------------------- Part Grid --------------------------------------------------------------------------------->
            <section class="container-grid">
                <section class="grid-cards">
                    <article class="grid-item1 admin">
                        <div class="photo">
                            <img src="\assets\images\cards\mbappe.jpg" alt="" class="cercle">
                            <h3>Mbapppe Kylian</h3>
                            <p>7</p>
                            <p class="position">Developpeur web junior</p>
                            <p>Employee</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail">o.fredson@yahoo.fr</p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>France</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                    <article class="grid-item2 admin">
                        <div class="photo">
                            <img src="\assets\images\cards\zinedine-zidane-1.jpg" alt="" class="cercle">
                            <h3>Zidane Zinedine</h3>
                            <p>10</p>
                            <p class="position">Developpeur Ful stack</p>
                            <p>Administrateur</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail">o.fredson@yahoo.fr</p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>France</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                    <article class="grid-item3 employee">
                        <div class="photo">
                            <img src="\assets\images\cards\henry.jpg" alt="" class="cercle">
                            <h3>Henry Thierry</h3>
                            <p>12</p>
                            <p class="position">Developpeur Front end</p>
                            <p>Employee</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail">o.fredson@yahoo.fr</p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>France</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                    <article class="grid-item4 admin">
                        <div class="photo">
                            <img src="\assets\images\cards\ronaldo.jpg" alt="" class="cercle">
                            <h3>Ronaldo Luis</h3>
                            <p>9</p>
                            <p class="position">Developpeur Front end</p>
                            <p>Administrateur</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail">o.fredson@yahoo.fr</p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>Bresil</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                    <article class="grid-item5 employee">
                        <div class="photo">
                            <img src="\assets\images\cards\verratti.jpg" alt="" class="cercle">
                            <h3>Verratti Marco</h3>
                            <p>6</p>
                            <p class="position">Developpeur Full stack</p>
                            <p>Employee</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail">o.fredson@yahoo.fr</p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>France</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                    <article class="grid-item6 admin photo">
                        <div class="photo">
                            <img src="\assets\images\cards\Gerrard.jpg" alt="" class="cercle">
                            <h3>Gerrard Steven</h3>
                            <p>8</p>
                            <p class="position">Developpeur Full stack</p>
                            <p>Administrateur</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail">o.fredson@yahoo.fr</p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>England</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                    <article class="grid-item7 admin ">
                        <div class="photo">
                            <img src="\assets\images\cards\silva.jpg" alt="" class="cercle">
                            <h3>Silva Thiago</h3>
                            <p>2</p>
                            <p class="position">Developpeur Back end</p>
                            <p>Administrateur</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail">o.fredson@yahoo.fr</p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>France</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                    <article class="grid-item8 employee">
                        <div class="photo">
                            <img src="\assets\images\cards\marquinhos.jpg" alt="" class="cercle">
                            <h3>Marquinhos Marcos</h3>
                            <p>5</p>
                            <p class="position">Developpeur Back end</p>
                            <p>Employee</p>
                            <p>06 62 52 64 35</p>
                            <p class="mail"><a href="">o.fredson@yahoo.fr</a></p>
                            <p>46 rue d'Argenteuil</p>
                            <p>95210 Saint-Gratien</p>
                            <p>France</p>
                            <i class="bi bi-pencil-fill"></i>
                        </div>
                    </article>
                </section>
            </section>
            <!------------------------------------------------------------------------------------- Part Grid --------------------------------------------------------------------------------->
        </section>

    </main>        
</body>
</html>

