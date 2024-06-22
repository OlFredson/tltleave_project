<h2><?=$title?></h2>
    <hr>
    <!-------------------------------------------------------- Form ------------------------------------------------->
    <section class="form-container">
<form action="/adminSubmitleave" method="post" id="leaveForm">
    <article class="mb-3">
        <label for="leaveTypeName">Type de congés</label>
        <select class="form-select" aria-label="Default select example" name="leaveTypeName" required>
            <?php foreach ($leaveTypes as $leaveType): ?>
                <option value="<?= htmlspecialchars($leaveType['leave_type_name']); ?>">
                    <?= htmlspecialchars($leaveType['leave_type_name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </article>
    <article class="mb-3">
        <label for="beginDate" class="form-label">Date de début</label>
        <input type="date" name="beginDate" class="form-control" id="beginDate" required>
    </article>
<!--
    <article class="mb-3">
        <label for="beginTime">Heure de début</label>
        <select class="form-select" aria-label="Default select example" name="beginTime" required>
            <option selected></option>
            <option value="Matin">Matin</option>
            <option value="Après-midi">Après-midi</option>
        </select>
    </article>
-->

    <article class="mb-3">
        <label for="endDate" class="form-label">Date de fin</label>
        <input type="date" name="endDate" class="form-control" id="endDate" required>
    </article>
<!--
    <article class="mb-3">
        <label for="endTime">Heure de fin</label>
        <select class="form-select" aria-label="Default select example" name="endTime" required>
            <option selected></option>
            <option value="Matin">Matin</option>
            <option value="Après-midi">Après-midi</option>
        </select>
    </article>
-->

    <article class="mb-3">
        <label for="nbrDays" class="form-label">Nombre de jours</label>
        <input type="number" name="nbrDays" class="form-control" id="nbrDays" readonly>
    </article>
    <article class="mb-3">
        <label for="commentary" class="form-label">Commentaires</label>
        <textarea class="form-control" id="commentary" name="commentary" rows="2"></textarea>
    </article>
    <article class="mb-3" class="button-requests">
        <input type="hidden" name="csrf_token" value="<?= $token ?>">
        <button type="button" class="btn btn-primary btn-lg btn-danger btn-leave-requests">Annuler</button>
        <button type="button" class="btn btn-primary btn-lg btn-primary btn-leave-requests">Enregistrer</button>
        <button type="submit" class="btn btn-primary btn-lg btn-success btn-leave-requests">Soumettre</button>
    </article>
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
                    Demande de congé soumise avec succès !
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</section>


