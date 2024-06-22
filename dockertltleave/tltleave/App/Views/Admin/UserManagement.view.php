<!------------------------------------------------------------------------------------- Part search et Create User  ------------------------------------------------------------------------------->
<h2>Gestion des utilisateurs</h2>
<article id="btn-add">
    <button type="button" class="btn-add-user" ><a href="<?=URL?>adminAddusers" class="a-add-user">Ajouter nouvel Utilisateur</a></button>
</article>
<hr>
<article id="search-sort-display">
    <input type="text" id="user-search" name="user-search" placeholder="Rechercher par nom, maricule, etc."/>
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
                <img src="<?php echo htmlspecialchars($user['profile_image_path'] ?? ''); ?>" alt="" class="cercle">
                <h3 class="user-name">
                    <?php echo htmlspecialchars($user['user_name']); ?>
                    <?php echo htmlspecialchars($user['firstname']); ?>
                </h3>
                <p class="user-id">
                    <?php echo htmlspecialchars($user['id_employee']); ?>
                </p>
                <p class="user-role">
                    <?php echo htmlspecialchars($user['user_role']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['user_profile']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['phone']); ?>
                </p>
                <p class="user-mail">
                    <?php echo htmlspecialchars($user['user_mail']); ?>
                </p>
                <p>
                    <?php echo mb_convert_encoding($user['user_address'],'ISO-8859-1', 'UTF-8' ); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['city']); ?>
                </p>
                <p>
                    <?php echo htmlspecialchars($user['country']); ?>
                </p>
                <i class="bi bi-pencil-fill" data-user="<?php echo htmlspecialchars(json_encode($user)); ?>"></i>
                <form  action="/userDelete"method="POST" style="display:inline;">
                    <input type="hidden" name="idEmployee" value="<?php echo htmlspecialchars($user['id_employee']); ?>">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($token); ?>">
                    <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')" style="background:none; border:none; color:inherit; cursor:pointer;">
                        <i class="bi bi-trash3"></i>
                    </button>
                </form>
            </div>
        </article>
        <?php endforeach; ?>
    </section>
</section>
<script src="\assets\js\Admin\userManagement.js"></script>

<!-- Modale pour la confirmation  de suppression -->
<!--
<section class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <section class="modal-dialog" role="document">
        <article class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmer la suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment supprimer cet utilisateur ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Supprimer</button>
            </div>
        </article>
    </section>
</section>
        -->

<!-- Modale pour la modification -->
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