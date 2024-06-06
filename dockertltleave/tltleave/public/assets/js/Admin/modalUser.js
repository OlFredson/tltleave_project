$(document).ready(function() {
    // Selectionne la modale
    let $modal = $("#modal");

    // Selectionne le bouton de fermeture
    let $close = $(".close");

    // Selectionne toutes les icônes de crayon
    let $editIcons = $(".bi-pencil-fill");

    // Parcours toutes les icônes de crayon et ajoute un écouteur de clic
    $editIcons.on('click', function(e) {
        // Remplis les champs de la modale avec les données de l'utilisateur
        let userData = $(this).data('user');

        $('#user_name').val(userData.user_name);
        $('#firstname').val(userData.firstname);
        $('#user_role').val(userData.user_role);
        $('#user_profile').val(userData.user_profile);
        $('#phone').val(userData.phone);
        $('#user_mail').val(userData.user_mail);
        $('#user_address').val(userData.user_address);
        $('#city').val(userData.city);
        $('#country').val(userData.country);

        // Ouvre la modale
        $modal.show();
    });

    // Lorsque l'utilisateur clique sur le bouton de fermeture cela ferme la modale
    $close.on('click', function() {
        $modal.hide();
    });

    // Lorsque l'utilisateur clique en dehors de la modale cela la ferme
    $(window).on('click', function(event) {
        if ($(event.target).is($modal)) {
            $modal.hide();
        }
    });

    // Soumission du formulaire via AJAX
    $(document).on('submit', '#edit-user-form', function(event) {
        event.preventDefault(); // Empêche la soumission du formulaire par défaut

        // Sérialiser les données du formulaire
        let formData = $(this).serialize();

        // Envoye des données via AJAX
        $.ajax({
            url: 'http://localhost:88/updateProfile',
            type: 'POST',
            data: formData, // Utilise les données sérialisées du formulaire
            success: function(response) {
                // Gere la réponse du serveur
                console.log('requete envoyée depuis depuis la requete ajax',response);
            },
            error: function(xhr, status, error) {
                // Gere les erreurs de la requête AJAX
                console.error(xhr, status, error);
            }
        });
    });
});
