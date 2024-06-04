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
        <article class="grid-item admin photo">
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
                    <?php echo htmlspecialchars($user['user_address']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['city']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['country']); ?>
                </p>
                <i class="bi bi-pencil-fill"></i>
            </div>
        </article>
        <?php endforeach; ?>
    </section>
</section>
<!------------------------------------------------------------------------------------- Part Grid --------------------------------------------------------------------------------->