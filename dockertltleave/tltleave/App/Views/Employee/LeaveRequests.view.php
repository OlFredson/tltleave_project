<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= URL ?>public\assets\js\color.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  <!-- Lien bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  <!-- Lien bootstrap -->
    <link rel="stylesheet" href="\assets\css\Employee\leaveRequests.css">
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
            <h1>Demande de congés</h1>
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
            <h2>Demande de congés</h2>
            <hr>
            <!-------------------------------------------------------- Form ------------------------------------------------->
            <section class="form-container">
                <form action="" method="post" >
                    <article class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selectionner type de congés</option>
                            <option value="1">Congés payés</option>
                            <option value="2">Congé maladie</option>
                            <option value="3">RTT</option>
                            <option value="4">Congé sans solde</option>
                            <option value="5">Congé maternité</option>
                            <option value="6">Congé paternité</option>
                            <option value="7">Congé parentale</option>
                            <option value="8">Congé enfant malade</option>
                            <option value="9">Mariage ou Pacs</option>
                            <option value="10">Congé individuel de formation</option>
                            <option value="11">Congé Dècés </option>
                            <option value="12">Congé annuel</option>
                            <option value="13">Congé de fractionnement</option>
                            <option value="14">Congé sabbatique</option>
                        </select>
                    </article>
                    <article class="mb-3">
                        <label for="beginDate" class="form-label"></label>
                        <input type="date" name="beginDate" class="form-control" id="beginDate">
                    </article>
                    <article class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Selectionner heure de début</option>
                            <option value="2">Matin</option>
                            <option value="3">Après-midi</option>
                        </select>
                    </article>
                    <article class="mb-3">
                        <label for="endDate" class="form-label"></label>
                        <input type="date" name="endDate" class="form-control" id="endDate">
                    </article>
                    <article class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Selectionner heure de fin</option>
                            <option value="2">Matin</option>
                            <option value="3">Après-midi</option>
                        </select>
                    </article>
                    <article class="mb-3">
                        <label for="nbrDays" class="form-label">Nombre de jours</label>
                        <input type="text" name="nbrDays" class="form-control" id="nbrDays">
                    </article>
                    <article class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Commentaires</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </article>
                </form>
            </section>
        </section>
    </main>        
</body>
</html>