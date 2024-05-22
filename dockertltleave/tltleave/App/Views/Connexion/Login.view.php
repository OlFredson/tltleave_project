<form action="/Connexion/Login.view" method="POST">
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

        <button type="button" class="button">Se connecter</button>
        <div class="form-items">
            <div>
                <input type="checkbox" id="remember" name="remember"/>
                <label for="remember">Se rappeler de moi</label>
            </div>
            <a href="passwordforgot" id="forgot-pwd" target="_blank">Mot de passe oublié ?</a>
        </div>
    </article>
</form>
