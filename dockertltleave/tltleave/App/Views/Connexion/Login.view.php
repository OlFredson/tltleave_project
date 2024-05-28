<form action="/connexionOk" method="POST">
    <article class="group-container">
        <figure>
            <img src="\assets\images\logo1.png" alt="Logo de l'application" width="150rem">
        </figure>
        <h1>Authentification</h1>
        <p>Veuillez saisir votre Matricule et mot de passe</p>

        <!-- 
        <input type="text" id="idEmployee" class="form-container" name="idEmployee" placeholder="Matricule" />
        <label for="idEmployee"></label>
        -->

        <input type="number" id="" class="form-container" name="idEmployee" placeholder="Matricule" />
        <label for="idEmployee"></label>

        <input type="password" id="userPassword" class="form-container" name="userPassword" placeholder="Password" />
        <label for="userPassword"></label>

        <button type="submit" class="button">Se connecter</button>
        <div class="form-items">
            <div>
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember">Se rappeler de moi</label>
            </div>
            <a href="passwordforgot" id="forgot-pwd" target="_blank">Mot de passe oublié ?</a>
        </div>
    </article>
</form>