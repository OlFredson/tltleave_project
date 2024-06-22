document.addEventListener("DOMContentLoaded", function() {
    let formToSubmit;

    // Ouvrir la modale de confirmation
    document.querySelectorAll('.delete-user-button').forEach(button => {
        button.addEventListener('click', function() {
            formToSubmit = this.closest('.delete-user-form');
            $('#confirmDeleteModal').modal('show');
        });
    });

    // Confirmer la suppression
    document.getElementById('confirmDeleteButton').addEventListener('click', function() {
        if (formToSubmit) {
            formToSubmit.submit();
        }
    });

});


///////////////////////////////////////////////////////////////////////////////////////////////////////


// Utilisation de JQuery pour la recherche de cards

$(document).ready(function() {
    //!Recherche des cards selon les données entrées dans le Input "Recherche"
    $('#user-search').on('input', function() {
        let searchTerm = $(this).val().toLowerCase();

        $('.grid-item-management').each(function() {
            let userName = $(this).find('.user-name').text().toLowerCase();
            let idEmployee = $(this).find('.user-id').text().toLowerCase();

            // Fonction de correspondance au début de mot
            function beginWord(word, search) {
                let regex = new RegExp('\\b' + search);
                return regex.test(word);
            }

            // Affiche la card si le terme de recherche correspond au nom ou au matricule au début d'un mot
            if (beginWord(userName, searchTerm) || beginWord(idEmployee, searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});