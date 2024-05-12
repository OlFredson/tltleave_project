            <h2>Dashboard</h2>
            <hr>
            <article class="grid-container">
                <div class="grid-item user-mgmt">
                    <h3>Gestion des utlisateurs</h3>
                    <div class="grid-users-container">
                        <h4 class="grid-admin"><a href="">Administrateurs</a></h4>
                        <h4 class="grid-employee"><a href="">Collaborateurs</a></h4>
                        <div class="grid-user1">
                            <a href=""><p>Thierry Henry</p></a>
                            <p>Developpeur Full-stack</p>
                        </div>
                        <div class="grid-user2">
                            <p><a href="">Zinedine Zidane</a></p>
                            <p>Developpeur Front-End</p>
                        </div>
                        <p class="grid-add">Ajouter Admins</p>
                        <a href="<?=URL?>addUsers"><i class="bi bi-plus-lg grid-plus"></i></a>
                    </div>

                </div>
                <div class="grid-item grid-treatment">
                    <h3>Traitement des demandes</h3>
                    <div class="grid-treatment-items">
                        <h4 class="item-pending">En attente</h4>
                        <div class="circle-pending"></div>
                        <div class="separation1"></div>
                        <h4 class="item-validated">Validées</h4>
                        <div class="circle-validated"></div>
                        <div class="separation2"></div>
                        <h4 class="item-refused">Refusées</h4>
                        <div class="circle-refused"></div>
                    </div>
                </div>
                <div class="grid-item statistics">
                    <h3>Statistiques</h3>
                </div>
                <div class="grid-item calendar">
                    <h3>Calendrier de presence</h3>
                </div>
            </article>     
