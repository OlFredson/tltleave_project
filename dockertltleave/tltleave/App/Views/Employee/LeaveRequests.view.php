            <h2><?=$title?></h2>
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
                    <article class="mb-3" class="button-requests">
                        <button type="button" class="btn btn-primary btn-lg btn-cancel">Annuler</button>
                        <button type="button" class="btn btn-primary btn-lg btn-register">Enregistrer</button>
                        <button type="button" class="btn btn-primary btn-lg btn-submit">Soumettre</button>
                    </article>
                </form>
            </section>
