            <form action="" method="POST">
                <article class="group-container">
                    <figure>
                        <img src="/assets/images/logo1.png" alt="Logo de l'application" width="150rem">
                    </figure>
                    <h1>Mot de passe oublié</h1>
                    <p>Veuillez saisir ci-dessous, votre adresse mail afin de recevoir le lien de rééinitialisation du mot de passe.</p>
                    <div>
                        <input type="text" id="user_password" name="user_password" placeholder="Nouveau mot de passe"/>
                        <label for="user_password"></label>
                    </div>

                    <div>
                        <input type="text" id="confirmation_password" name="confirmation_password" placeholder="Confirmez mot de passe"/>
                        <label for="confirmation_password"></label>
                    </div>
                    
                    <div>
                        <p>10 Caractères minimum</p>
                        <p>Une Majuscule mininum</p>
                        <p>Une minuscule minimum</p>
                        <p>Un chiffre minimum</p>
                        <p>Un caractère spécial minimum (!,?,@,#,$,^,&,/,\,-,+,=)</p>
                    </div>
                    
                    <div>
                        <button>Changement mot de passe</button>
                    </div>
                    <a href="tltleave\App\Views\Connexion\PasswordForgot.view.php">Retour à l'écran de connexion</a>
                </article>
            </form>

