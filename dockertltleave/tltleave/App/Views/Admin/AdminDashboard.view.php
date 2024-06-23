                <h2>Dashboard</h2>
            <hr>
            <section class="grid-container">
                <article class="grid-item user-mgmt">
                    <h3 id="h3dashboard">Gestion des utlisateurs</h3>
                    <div class="grid-users-container">
                        <h4 class="grid-admin" id="h4dashboard"><a href="" id="dash-a">Administrateurs</a></h4>
                        <h4 class="grid-employee" id="h4dashboard"><a href="" id="dash-a">Collaborateurs</a></h4>
                        <div class="grid-user1 circle-dashboard">
                            <div class="circle-user"></div>
                            <div class="user-dash">
                                <a href="" class="p-user-dashboard"><p>Fredson Oliveira</p></a>
                                <p>Developpeur Full-stack</p>
                            </div>
                        </div>
                        <div class="grid-user2 circle-dashboard">
                            <div class="circle-user"></div>
                            <div class="user-dash">
                                <a href="" class="p-user-dashboard"><p>Sonia Waag</p></a>
                                <p>Developpeur Front-End</p>
                            </div>
                        </div>
                        <p class="grid-add">Ajouter Admins</p>
                        <a href="<?=URL?>add-users"><i class="bi bi-plus-lg grid-plus"></i></a>
                    </div>

                </article>
                <article class="grid-item grid-treatment">
                    <h3 id="h3dashboard">Traitement des demandes</h3>
                    <div class="grid-treatment-items">
                        <h4 class="item-pending " id="h4dashboard">En attente</h4>
                        <div class="circle-pending"></div>
                        <div class="separation1"></div>
                        <h4 class="item-validated" id="h4dashboard">Validées</h4>
                        <div class="circle-validated"></div>
                        <div class="separation2"></div>
                        <h4 class="item-refused" id="h4dashboard">Refusées</h4>
                        <div class="circle-refused"></div>
                    </div>
                </article>
                <article class="grid-item statistics">
                    <h3 id="h3dashboard">Statistiques</h3>
                    <img src="\assets\images\ex\stats.PNG" alt="" class="img-stats" width="350rem">
                    <img src="\assets\images\ex\stats2.PNG" alt="" class="img-stats" width="350rem">
                </article>
                <article class="grid-item calendar">
                    <h3 id="h3dashboard">Calendrier de presence</h3>
                    <h5>Absences</h5>
                    <p class="p-calendar">Aujourd'hui</p>
                    <div class="grid-user1 circle-dashboard">
                        <div class="circle-user"></div>
                        <div class="user-dash">
                            <a href="" class="p-user-dashboard"><p>Ichigo Kurosaki</p></a>
                            <p>Developpeur Full-stack</p>
                        </div>
                    </div>
                    <div class="grid-user1 circle-dashboard">
                        <div class="circle-user"></div>
                        <div class="user-dash">
                            <a href="" class="p-user-dashboard"><p>Luffy Mugiwara</p></a>
                            <p>Developpeur Full-stack</p>
                        </div>
                    </div>
                </article>
            </section>
