<!-------------------------------------------------------- Form ------------------------------------------------->

<h2>Ajout utilisateurs</h2>

<hr>
<section class="form-container">
    <form action="/adminSubmitusers" method="POST" id="userForm">
        <article class="mb-3">
            <label for="userName" class="form-label">Nom:</label>
            <input type="text" name="userName" class="form-control" id="userName" placeholder="Nom"
                pattern="^[A-Za-zÀ-ÿ'-]+$" title="Merci de ne saisir que des lettres svp" required>
        </article>

        <article class="mb-3">
            <label for="firstName" class="form-label">Prénom:</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Prenom"
                pattern="^[A-Za-zÀ-ÿ'-]+$" required>
        </article>

        <article class="mb-3">
            <label for="birthDate" class="form-label">Date de naissance:</label>
            <input type="date" name="birthDate" class="form-control" id="birthDate">
        </article>

        <article class="mb-3">
            <label for="gender" class="form-label">Sexe:</label>
            <select id="gender" name="gender" class="form-control">
                <option selected></option>
                <option value="Masculin">Masculin</option>
                <option value="Féminin">Féminin</option>
                <option value="Autre">Autre</option>
            </select>
        </article>

        <article class="mb-3">
            <label for="situation" class="form-label">Situation</label>
            <select name="situation" id="situation" class="form-control">
                <option selected></option>
                <option value="Célibataire">Célibataire</option>
                <option value="Marié(e)">Marié(e)</option>
                <option value="Pacsé(e)">Pacsé(e)</option>
                <option value="En concubinage">En concubinage</option>
                <option value="Divorcé(e)">Divorcé(e)</option>
                <option value="Veuf(ve)">Veuf(ve)</option>
                <option value="Séparé(e)">Séparé(e)</option>
                <option value="En couple">En couple</option>
                <option value="En union libre">En union libre</option>
                <option value="Fiancé(e)">Fiancé(e)</option>
            </select>
        </article>

        <article class="mb-3">
            <label for="child">Enfant:</label>
            <select class="form-select" aria-label="Default select example" name="child" id="childs">
                <option selected>Aucun</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>

            </select>
        </article>

        <article class="mb-3">
            <fieldset>
                <legend>Adresse:</legend>
                <label for="userAddress" class="form-label">Numéro et rue:</label>
                <input type="text" name="userAddress" class="form-control" id="userAddress"
                    placeholder="ex: 1 rue de Paris">

                <label for="zipCode" class="form-label">Code Postal:</label>
                <input type="text" name="zipCode" class="form-control" id="zipCode" placeholder="ex :75001"
                    pattern="^\d{5}$">

                <label for="city" class="form-label">Ville:</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="ex : Paris"
                    pattern="^[A-Za-zÀ-ÿ'-]+$">

                    <div class="mb-3">
                    <label for="country" class="form-label">Pays:</label>
                    <select name="country" class="form-control" id="country">
                        <option selected></option>
                        <optgroup label="A">
                            <option value="afghanistan">Afghanistan</option>
                            <option value="afrique-du-sud">Afrique du Sud</option>
                            <option value="albanie">Albanie</option>
                            <option value="algerie">Algérie</option>
                            <option value="allemagne">Allemagne</option>
                            <option value="ancienne-republique-yougoslave-de-macedoine">Ancienne République yougoslave
                                de Macédoine</option>
                            <option value="andorre">Andorre</option>
                            <option value="angola">Angola</option>
                            <option value="anguilla">Anguilla</option>
                            <option value="antarctique">Antarctique</option>
                            <option value="antigua-et-barbuda">Antigua-et-Barbuda</option>
                            <option value="antilles-neerlandaises">Antilles néerlandaises</option>
                            <option value="arabie-saoudite">Arabie saoudite</option>
                            <option value="argentine">Argentine</option>
                            <option value="armenie">Arménie</option>
                            <option value="aruba">Aruba</option>
                            <option value="australie">Australie</option>
                            <option value="autriche">Autriche</option>
                            <option value="azerbaidjan">Azerbaïdjan</option>
                        </optgroup>
                        <optgroup label="B">
                            <option value="bahamas">Bahamas</option>
                            <option value="bahrein">Bahreïn</option>
                            <option value="bangladesh">Bangladesh</option>
                            <option value="barbade">Barbade</option>
                            <option value="belgique">Belgique</option>
                            <option value="belize">Belize</option>
                            <option value="benin">Bénin</option>
                            <option value="bermudes">Bermudes</option>
                            <option value="bhoutan">Bhoutan</option>
                            <option value="bielorussie">Biélorussie</option>
                            <option value="bolivie">Bolivie</option>
                            <option value="bosnie-et-herzegovine">Bosnie-et-Herzégovine</option>
                            <option value="botswana">Botswana</option>
                            <option value="bresil">Brésil</option>
                            <option value="brunei-darussalam">Brunei Darussalam</option>
                            <option value="bulgarie">Bulgarie</option>
                            <option value="burkina-faso">Burkina Faso</option>
                            <option value="burundi">Burundi</option>
                        </optgroup>
                        <optgroup label="C">
                            <option value="cambodge">Cambodge</option>
                            <option value="cameroun">Cameroun</option>
                            <option value="canada">Canada</option>
                            <option value="cap-vert">Cap-Vert</option>
                            <option value="chili">Chili</option>
                            <option value="chine">Chine</option>
                            <option value="chypre">Chypre</option>
                            <option value="colombie">Colombie</option>
                            <option value="comores">Comores</option>
                            <option value="congo">Congo</option>
                            <option value="costa-rica">Costa Rica</option>
                            <option value="cote-d-ivoire">Côte d'Ivoire</option>
                            <option value="croatie">Croatie</option>
                            <option value="cuba">Cuba</option>
                        </optgroup>
                        <optgroup label="D">
                            <option value="danemark">Danemark</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominique">Dominique</option>
                        </optgroup>
                        <optgroup label="E">
                            <option value="egypte">Égypte</option>
                            <option value="el-salvador">El Salvador</option>
                            <option value="emirats-arabes-unis">Émirats arabes unis</option>
                            <option value="equateur">Équateur</option>
                            <option value="erythree">Érythrée</option>
                            <option value="espagne">Espagne</option>
                            <option value="estonie">Estonie</option>
                            <option value="etats-federes-de-micronesie">États fédérés de Micronésie</option>
                            <option value="etats-unis">États-Unis</option>
                            <option value="ethiopie">Éthiopie</option>
                        </optgroup>
                        <optgroup label="F">
                            <option value="fidji">Fidji</option>
                            <option value="finlande">Finlande</option>
                            <option value="france">France</option>
                        </optgroup>
                        <optgroup label="G">
                            <option value="gabon">Gabon</option>
                            <option value="gambie">Gambie</option>
                            <option value="georgie">Géorgie</option>
                            <option value="georgie-du-sud-et-les-iles-sandwich-du-sud">Géorgie du Sud-et-les Îles
                                Sandwich du Sud</option>
                            <option value="ghana">Ghana</option>
                            <option value="gibraltar">Gibraltar</option>
                            <option value="grece">Grèce</option>
                            <option value="grenade">Grenade</option>
                            <option value="groenland">Groenland</option>
                            <option value="guadeloupe">Guadeloupe</option>
                            <option value="guam">Guam</option>
                            <option value="guatemala">Guatemala</option>
                            <option value="guinee">Guinée</option>
                            <option value="guinee-equatoriale">Guinée équatoriale</option>
                            <option value="guinee-bissau">Guinée-Bissau</option>
                            <option value="guyane">Guyane</option>
                            <option value="guyane-francaise">Guyane française</option>
                        </optgroup>
                        <optgroup label="H">
                            <option value="haiti">Haïti</option>
                            <option value="honduras">Honduras</option>
                            <option value="hong-kong">Hong Kong</option>
                            <option value="hongrie">Hongrie</option>
                        </optgroup>
                        <optgroup label="I">
                            <option value="ile-bouvet">Ile Bouvet</option>
                            <option value="ile-christmas">Ile Christmas</option>
                            <option value="ile-norfolk">Île Norfolk</option>
                            <option value="ile-pitcairn">Île Pitcairn</option>
                            <option value="iles-aland">Iles Aland</option>
                            <option value="iles-cayman">Iles Cayman</option>
                            <option value="iles-cocos-keeling">Iles Cocos (Keeling)</option>
                            <option value="iles-cook">Iles Cook</option>
                            <option value="iles-feroe">Îles Féroé</option>
                            <option value="iles-heard-et-macdonald">Îles Heard-et-MacDonald</option>
                            <option value="iles-malouines">Îles Malouines</option>
                            <option value="iles-mariannes-du-nord">Îles Mariannes du Nord</option>
                            <option value="iles-marshall">Îles Marshall</option>
                            <option value="iles-mineures-eloignees-des-etats-unis">Îles mineures éloignées des
                                États-Unis</option>
                            <option value="iles-salomon">Îles Salomon</option>
                            <option value="iles-turques-et-caiques">Îles Turques-et-Caïques</option>
                            <option value="iles-vierges-britanniques">Îles Vierges britanniques</option>
                            <option value="iles-vierges-des-etats-unis">Îles Vierges des États-Unis</option>
                            <option value="inde">Inde</option>
                            <option value="indonesie">Indonésie</option>
                            <option value="iraq">Iraq</option>
                            <option value="irlande">Irlande</option>
                            <option value="islande">Islande</option>
                            <option value="israel">Israël</option>
                            <option value="italie">Italie</option>
                        </optgroup>
                        <optgroup label="J">
                            <option value="jamahiriya-arabe-libyenne">Jamahiriya arabe libyenne</option>
                            <option value="jamaique">Jamaïque</option>
                            <option value="japon">Japon</option>
                            <option value="jordanie">Jordanie</option>
                        </optgroup>
                        <optgroup label="K">
                            <option value="kazakhstan">Kazakhstan</option>
                            <option value="kenya">Kenya</option>
                            <option value="kirghizistan">Kirghizistan</option>
                            <option value="kiribati">Kiribati</option>
                            <option value="koweit">Koweït</option>
                        </optgroup>
                        <optgroup label="L">
                            <option value="lesotho">Lesotho</option>
                            <option value="lettonie">Lettonie</option>
                            <option value="liban">Liban</option>
                            <option value="liberia">Libéria</option>
                            <option value="liechtenstein">Liechtenstein</option>
                            <option value="lituanie">Lituanie</option>
                            <option value="luxembourg">Luxembourg</option>
                        </optgroup>
                        <optgroup label="M">
                            <option value="macao">Macao</option>
                            <option value="madagascar">Madagascar</option>
                            <option value="malaisie">Malaisie</option>
                            <option value="malawi">Malawi</option>
                            <option value="maldives">Maldives</option>
                            <option value="mali">Mali</option>
                            <option value="malte">Malte</option>
                            <option value="maroc">Maroc</option>
                            <option value="martinique">Martinique</option>
                            <option value="maurice">Maurice</option>
                            <option value="mauritanie">Mauritanie</option>
                            <option value="mayotte">Mayotte</option>
                            <option value="mexique">Mexique</option>
                            <option value="monaco">Monaco</option>
                            <option value="mongolie">Mongolie</option>
                            <option value="montserrat">Montserrat</option>
                            <option value="mozambique">Mozambique</option>
                            <option value="myanmar">Myanmar</option>
                        </optgroup>
                        <optgroup label="N">
                            <option value="namibie">Namibie</option>
                            <option value="nauru">Nauru</option>
                            <option value="nepal">Népal</option>
                            <option value="nicaragua">Nicaragua</option>
                            <option value="niger">Niger</option>
                            <option value="nigeria">Nigéria</option>
                            <option value="niue">Niué</option>
                            <option value="norvege">Norvège</option>
                            <option value="nouvelle-caledonie">Nouvelle-Calédonie</option>
                            <option value="nouvelle-zelande">Nouvelle-Zélande</option>
                        </optgroup>
                        <optgroup label="O">
                            <option value="oman">Oman</option>
                            <option value="ouganda">Ouganda</option>
                            <option value="ouzbekistan">Ouzbékistan</option>
                        </optgroup>
                        <optgroup label="P">
                            <option value="pakistan">Pakistan</option>
                            <option value="palaos">Palaos</option>
                            <option value="panama">Panama</option>
                            <option value="papouasie-nouvelle-guinee">Papouasie-Nouvelle-Guinée</option>
                            <option value="paraguay">Paraguay</option>
                            <option value="pays-bas">Pays-Bas</option>
                            <option value="perou">Pérou</option>
                            <option value="philippines">Philippines</option>
                            <option value="pologne">Pologne</option>
                            <option value="polynesie-francaise">Polynésie française</option>
                            <option value="porto-rico">Porto Rico</option>
                            <option value="portugal">Portugal</option>
                            <option value="province-chinoise-de-taiwan">Province chinoise de Taiwan</option>
                        </optgroup>
                        <optgroup label="Q">
                            <option value="qatar">Qatar</option>
                        </optgroup>
                        <optgroup label="R">
                            <option value="republique-arabe-syrienne">République arabe syrienne</option>
                            <option value="republique-centrafricaine">République centrafricaine</option>
                            <option value="republique-de-coree">République de Corée</option>
                            <option value="republique-de-moldavie">République de Moldavie</option>
                            <option value="republique-democratique-du-congo">République démocratique du Congo</option>
                            <option value="republique-dominicaine">République dominicaine</option>
                            <option value="republique-islamique-d-iran">République islamique d'Iran</option>
                            <option value="republique-populaire-democratique-de-coree">République populaire démocratique
                                de Corée</option>
                            <option value="republique-populaire-du-laos">République Populaire du Laos</option>
                            <option value="republique-tcheque">République tchèque</option>
                            <option value="republique-unie-de-tanzanie">République-Unie de Tanzanie</option>
                            <option value="reunion">Réunion</option>
                            <option value="roumanie">Roumanie</option>
                            <option value="royaume-uni">Royaume-Uni</option>
                            <option value="russie">Russie</option>
                            <option value="rwanda">Rwanda</option>
                        </optgroup>
                        <optgroup label="S">
                            <option value="sahara-occidental">Sahara occidental</option>
                            <option value="saint-christophe-et-nieves">Saint-Christophe-et-Niévès</option>
                            <option value="saint-marin">Saint-Marin</option>
                            <option value="saint-pierre-et-miquelon">Saint-Pierre-et-Miquelon</option>
                            <option value="saint-siege-cite-du-vatican">Saint-Siège (Cité du Vatican)</option>
                            <option value="saint-vincent-et-les-grenadines">Saint-Vincent-et-les Grenadines</option>
                            <option value="sainte-helene">Sainte-Hélène</option>
                            <option value="sainte-lucie">Sainte-Lucie</option>
                            <option value="samoa">Samoa</option>
                            <option value="samoa-americaines">Samoa américaines</option>
                            <option value="sao-tome-et-principe">Sao Tomé-et-Principe</option>
                            <option value="senegal">Sénégal</option>
                            <option value="serbie-et-montenegro">Serbie-et-Monténégro</option>
                            <option value="seychelles">Seychelles</option>
                            <option value="sierra-leone">Sierra Leone</option>
                            <option value="singapour">Singapour</option>
                            <option value="slovaquie">Slovaquie</option>
                            <option value="slovenie">Slovénie</option>
                            <option value="somalie">Somalie</option>
                            <option value="soudan">Soudan</option>
                            <option value="sri-lanka">Sri Lanka</option>
                            <option value="suede">Suède</option>
                            <option value="suisse">Suisse</option>
                            <option value="suriname">Suriname</option>
                            <option value="svalbard-et-jan-mayen">Svalbard et Jan Mayen</option>
                            <option value="swaziland">Swaziland</option>
                        </optgroup>
                        <optgroup label="T">
                            <option value="tadjikistan">Tadjikistan</option>
                            <option value="tchad">Tchad</option>
                            <option value="territoire-britannique-de-l-ocean-indien">Territoire britannique de l'océan
                                Indien</option>
                            <option value="territoire-francais-du-sud">Territoire Francais du Sud</option>
                            <option value="territoires-palestiniens-occupes">Territoires palestiniens occupés</option>
                            <option value="thailande">Thaïlande</option>
                            <option value="timor-oriental">Timor oriental</option>
                            <option value="togo">Togo</option>
                            <option value="tokelau">Tokelau</option>
                            <option value="tonga">Tonga</option>
                            <option value="trinite-et-tobago">Trinité-et-Tobago</option>
                            <option value="tunisie">Tunisie</option>
                            <option value="turkmenistan">Turkménistan</option>
                            <option value="turquie">Turquie</option>
                            <option value="tuvalu">Tuvalu</option>
                        </optgroup>
                        <optgroup label="U">
                            <option value="ukraine">Ukraine</option>
                            <option value="uruguay">Uruguay</option>
                        </optgroup>
                        <optgroup label="V">
                            <option value="vanuatu">Vanuatu</option>
                            <option value="venezuela">Vénézuéla</option>
                            <option value="vietnam">Vietnam</option>
                        </optgroup>
                        <optgroup label="W">
                            <option value="wallis-et-futuna">Wallis-et-Futuna</option>
                        </optgroup>
                        <optgroup label="Y">
                            <option value="yemen">Yémen</option>
                        </optgroup>
                        <optgroup label="Z">
                            <option value="zambie">Zambie</option>
                            <option value="zimbabwe">Zimbabwe</option>
                        </optgroup>
                    </select>
                </div>
            </fieldset>
        </article>

        <article class="mb-3">
            <label for="phone" class="form-label">Numéro de Téléphone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Téléphone"
                pattern="^\+?[0-9 .-]+$">
        </article>

        <article class="mb-3">
            <label for="userMail" class="form-label">Adresse mail</label>
            <input type="email" name="userMail" class="form-control" id="userMail" placeholder="@mail" required
                pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                <span class="error-message" style="display: none">Veuillez entrer une adresse mail valide</span>
                <span class="valid-message" style="display: none">Adresse mail correct</span>
        </article>

        <article class="mb-3">
            <label for="userImage" class="form-label">Photo utilisateur:</label>
            <input type="file" name="userImage" class="form-control" id="userImage">
        </article>

        <article class="mb-3">
            <label for="userProfile" class="form-label">Rôle:</label>
            <select name="userProfile" class="form-control" id="userProfile" required>
                <option selected></option>
                <option value="Administrateur">Administrateur</option>
                <option value="Employé">Employé</option>
            </select>
        </article>

        <article class="mb-3">
            <label for="userRole" class="form-label">Poste:</label>
            <input type="text" name="userRole" class="form-control" id="userRole" placeholder="ex : Adminstrateur Réseau"
            pattern="/^[A-Za-zÀ-ÖØ-öø-ÿ\s-]+$/">
        </article>

        <article class="mb-3">
            <label for="team">Equipe :</label>
            <select class="form-select" name="team" id="team" placeholder="Equipe">
                <?php foreach ($teams as $team): ?>
                    <option value="<?= htmlspecialchars($team) ?>"><?= htmlspecialchars($team) ?></option>
                <?php endforeach; ?>
                </select>
        </article>

        <article class="mb-3">
            <label for="employmentStatus" class="form-label">Statut Emploi:</label>
            <select name="employmentStatus" class="form-control" id="employmentStatus">
                <option selected></option>
                <option value="Contrat à durée indéterminée (CDI)">Contrat à durée indéterminée (CDI)</option>
                <option value="Contrat à durée détérminée (CDD)">Contrat à durée détérminée (CDD)</option>
                <option value="CDD à ojet défini">CDD à ojet défini</option>
                <option value="Contrat de travail temporaire ou d'intérim">Contrat de travail temporaire ou d'intérim
                </option>
                <option value="Contrat de travail à temps partiel">Contrat de travail à temps partiel</option>
            </select>
        </article>

        <article class="mb-3">
            <label for="hiredDate" class="form-label">Date d'embauche:</label>
            <input type="date" name="hiredDate" class="form-control" id="hiredDate">
        </article>

        <article class="mb-3">
            <label for="userPassword" class="form-label"></label>
            <input type="password" name="userPassword" class="form-control" id="userPassword" placeholder="Mot de passe"
                pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$"
                title="Au moins 1 minuscule, 1 Majuscule, 1 chiffre, 1 caractère spéciale ($,@,%,*, etc) et au moins 8 caractères."
                required>
        </article>

        <article class="mb-3">
            <label for="confirmPassword" class="form-label"></label>
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword"
                placeholder="Confirmer Mot de passe" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$"
                title="Au moins 1 minuscule, 1 Majuscule, 1 chiffre, 1 caractère spéciale ($,@,%,*, etc) et au moins 8 caractères."
                required>
        </article>

        <input type="hidden" name="csrf_token" value="<?= $token ?>">
        <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Succès</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Utilisateur créé avec succès !
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</section>

