<h2><?=$title?></h2>
            <hr>
            <!------------------------------------------------------------------------------ Part table Treatment Requests - Start ------------------------------------------------------------------->
            <article class="treatment-container">
                <div class="tabs-container">
                    <button class="tab-btn active" type="button"><a href="#">Toutes les demandes</a></button>
                    <button class="tab-btn"><a href="#">Demandes en attente de validation</a></button>
                    <button class="tab-btn"><a href="#">Demandes Validées</a></button>
                    <button class="tab-btn"><a href="#">Demandes Refusées</a></button>
                    <button class="tab-btn"><a href="#">Demandes enregistrées</a></button>
                    <hr class="hr-treatment">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Numéro</th>
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
                            <th scope="row">1</th>
                            <td>2024-04-23</td>
                            <td>En attente</td>
                            <td><img src="\assets\images\cards\zinedine-zidane-1.jpg" alt="" width="50vw"></td>
                            <td>2024-05-03</td>
                            <td>2024-05-11</td>
                            <td>7</td>
                            <td>Congés payés</td>
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
