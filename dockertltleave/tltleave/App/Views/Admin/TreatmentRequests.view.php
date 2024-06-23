            <!------------------------------------------------------------------------------------- Part search - Start ------------------------------------------------------------------------------->
            <h2>Traitement des demandes</h2>
            <hr>
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
            <hr class="hr-treatment">
            <article class="treatment-container">
                <div class="tabs-container">
                    <button class="tab-btn active" type="button"><a href="#">Toutes les demandes</a></button>
                    <button class="tab-btn"><a href="#">Demandes en attente de validation</a></button>
                    <button class="tab-btn"><a href="#">Demandes Validées</a></button>
                    <button class="tab-btn"><a href="#">Demandes Refusées</a></button>

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
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><img src="" alt="" width="50vw"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
