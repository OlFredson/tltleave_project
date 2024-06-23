            <h2><?=$title?></h2>
            <hr>
            <!-------------------------------------------------------- Form ------------------------------------------------->
            <section class="form-container">
                <form action="" method="post" >
                    <article class="mb-3">
                        <label for="leaveTypeName">Type de congés</label>
                        <select class="form-select" aria-label="Default select example" name="leaveTypeName" required>
                            <option selected></option>
                            <option value="Congés payés">Congés payés</option>
                            <option value="Congé maladie">Congé maladie</option>
                            <option value="RTT">RTT</option>
                            <option value="Congé sans solde">Congé sans solde</option>
                            <option value="Congé maternité">Congé maternité</option>
                            <option value="Congé paternité">Congé paternité</option>
                            <option value="Congé parentale">Congé parentale</option>
                            <option value="Congé enfant malade">Congé enfant malade</option>
                            <option value="Mariage ou Pacs">Mariage ou Pacs</option>
                            <option value="Congé individuel de formation">Congé individuel de formation</option>
                            <option value="Congé Dècés">Congé Dècés</option>
                            <option value="Congé annuel">Congé annuel</option>
                            <option value="Congé de fractionnement">Congé de fractionnement</option>
                            <option value="Congé sabbatique">Congé sabbatique</option>
                        </select>
                    </article>
                    <article class="mb-3">
                        <label for="beginDate" class="form-label">Date de début</label>
                        <input type="date" name="beginDate" class="form-control" id="beginDate" required>
                    </article>
                    <article class="mb-3">
                        <label for="">Heure de début</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected></option>
                            <option value="Matin">Matin</option>
                            <option value="Après-midi">Après-midi</option>
                        </select>
                    </article>
                    <article class="mb-3">
                        <label for="endDate" class="form-label">Date de fin</label>
                        <input type="date" name="endDate" class="form-control" id="endDate" required>
                    </article>
                    <article class="mb-3">
                        <label for="">Heure de fin</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <option selected></option>
                            <option value="Matin">Matin</option>
                            <option value="Après-midi">Après-midi</option>
                        </select>
                    </article>
                    <article class="mb-3">
                        <label for="nbrDays" class="form-label">Nombre de jours</label>
                        <input type="text" name="nbrDays" class="form-control" id="nbrDays" required>
                    </article>
                    <article class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Commentaires</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </article>
                    <article class="mb-3" class="button-requests">
                        <button type="button" class="btn btn-primary btn-lg btn-cancel">Annuler</button>
                        <button type="button" class="btn btn-primary btn-lg btn-register">Enregistrer</button>
                        <button type="button" class="btn btn-primary btn-lg btn-submit">Soumettre</button>
                    </article>
                </form>
            </section>
