$(document).ready(function() {
    function calculateDays() {
        let beginDate = new Date($('#beginDate').val());
        let endDate = new Date($('#endDate').val());

        // Assurez-vous que beginDate est toujours avant endDate
        if (beginDate > endDate) {
            alert("La date de début doit être antérieure à la date de fin.");
            $('#nbrDays').val(0);
            return;
        }

        let diffDays = 0;
        let currentDate = new Date(beginDate);

        // Itération sur chaque jour entre les deux dates
        while (currentDate <= endDate) {
            let dayOfWeek = currentDate.getDay();
            // Exclure les dimanches (0) et samedis (6)
            if (dayOfWeek !== 0 && dayOfWeek !== 6) {
                diffDays++;
            }
            // Passer au jour suivant
            currentDate.setDate(currentDate.getDate() + 1);
        }

        // Mettre à jour le champ Nombre de jours
        $('#nbrDays').val(diffDays);
    }

    // Ajoute un écouteur d'événement pour détecter les changements de dates
    $('#beginDate').on('change', calculateDays);
    $('#endDate').on('change', calculateDays);

    // Soumission du formulaire et affichage du modal via Ajax
    $('#leaveForm').on('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '/submit-leave',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                // Affiche le modal de succès
                $('#success').modal('show');
            },
            error: function(error) {
                alert('Erreur lors de la création de demande de congés');
            }
        });
    });

    // Vide les champs du formulaire après fermeture du modal
    $('#success').on('hidden.bs.modal', function () {
        $('#leaveForm')[0].reset();
        $('#nbrDays').val(0);
    });
});