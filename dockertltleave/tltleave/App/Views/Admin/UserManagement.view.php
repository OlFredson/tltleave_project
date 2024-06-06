<!------------------------------------------------------------------------------------- Part search ------------------------------------------------------------------------------->
<h2>Gestion des utilisateurs</h2>
<hr>
<article id="search-sort-display">
    <input type="text" id="user-search" name="user-search" placeholder="Rechercher par nom, maricule, etc." />
    <label for="user-search"></label>
    <div class="sort-display">
        <div class="sort-by">
            <p>Trier par: </p>
            <select class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="Nom">Nom</option>
                <option value="Matricule">Matricule</option>
                <option value="Profil">Profil</option>
                <option value="Poste">Poste</option>
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
        <?php foreach ($users as $user): ?>
        <article class="grid-item-management admin">
            <div class="photo">
                <img src="<?php echo htmlspecialchars($user['user_image']); ?>" alt="" class="cercle">
                <h3>
                    <?php echo htmlspecialchars($user['user_name']); ?>
                    <?php echo htmlspecialchars($user['firstname']); ?>
                </h3>
                <p>
                    <?php echo htmlspecialchars($user['id_employee']); ?>
                </p>
                <p class="position">
                    <?php echo htmlspecialchars($user['user_role']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['user_profile']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['phone']); ?>
                </p>
                <p class="mail">
                    <?php echo htmlspecialchars($user['user_mail']); ?>
                </p>
                <p>
                    <?php echo @utf8_decode($user['user_address']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['city']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['country']); ?>
                </p>
                <i class="bi bi-pencil-fill" data-user="<?php echo htmlspecialchars(json_encode($user)); ?>"></i>
            </div>
        </article>
        <?php endforeach; ?>
    </section>
</section>

<section id="modal" class="modal">
    <article class="modal-content">
        <span class="close">&times;</span>
        <h2>Modifier les informations de l'utilisateur</h2>
        <form id="edit-user-form">
            <label for="user_name">Nom:</label>
            <input type="text" id="user_name" name="user_name"><br><br>
            <label for="firstname">Prénom:</label>
            <input type="text" id="firstname" name="firstname"><br><br>
            <label for="user_role">Rôle:</label>
            <input type="text" id="user_role" name="user_role"><br><br>
            <label for="user_profile">Profil:</label>
            <input type="text" id="user_profile" name="user_profile"><br><br>
            <label for="phone">Téléphone:</label>
            <input type="text" id="phone" name="phone"><br><br>
            <label for="user_mail">Email:</label>
            <input type="text" id="user_mail" name="user_mail"><br><br>
            <label for="user_address">Adresse:</label>
            <input type="text" id="user_address" name="user_address"><br><br>
            <label for="city">Ville:</label>
            <input type="text" id="city" name="city"><br><br>
            <label for="country">Pays:</label>
            <input type="text" id="country" name="country"><br><br>
            <button type="submit">Sauvegarder</button>
        </form>
    </article>
</section>

<!------------------------------------------------------------------------------------- Part Grid --------------------------------------------------------------------------------->