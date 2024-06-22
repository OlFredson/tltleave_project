$(document).ready(function() {
    ////     COM : Modal ajout Demande de congés
    $('#leaveForm').on('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);

        console.log('Envoi des données :', formData); // Diagnostic

        $.ajax({
            type: 'POST',
            url: '/adminSubmitleave',  // Remplacez par l'URL de votre serveur de traitement
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log('Réponse réussie :', response); // Diagnostic
                // Affiche le modal de succès
                $('#successModal').modal('show');
            },
            error: function(error) {
                console.log('Erreur :', error); // Diagnostic
                // Gérez les erreurs ici
                alert('Erreur lors de la création de l\'utilisateur');
            }
        });
    });
    $('#successModal').on('hidden.bs.modal', function () {
        $('#leaveForm')[0].reset();
    });
});