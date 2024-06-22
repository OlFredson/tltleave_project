$(document).ready(function() {

    // Fonction pour restreindre la saisie de caractères dans les champs userName et firstName
    function restrictInput(event) {
        const pattern = /^[A-Za-zÀ-ÿ'-]+$/; // Pattern pour autoriser uniquement les lettres, les accents et les tirets
        const input = $(this).val(); // Récupération de la valeur du champ
        const errorField = $(this).next('.error-message'); // Sélection de l'élément suivant de classe 'error' pour afficher les erreurs

        if (!pattern.test(input)) {
            $(this).val(input.replace(/[^A-Za-zÀ-ÿ'-]+/g, '')); // Remplacement des caractères invalides par une chaîne vide
            errorField.text('Merci de ne saisir que des lettres.'); // Affichage d'un message d'erreur
            $(this).addClass('invalid'); // Ajout de la classe 'invalid' pour mettre en évidence le champ
        } else {
            errorField.text(''); // Effacement du message d'erreur
            $(this).removeClass('invalid'); // Suppression de la classe 'invalid'
        }
    }

    // Appel de la fonction restrictInput lorsque l'utilisateur saisit du texte dans les champs userName et firstName
    $('#userName, #firstName').on('input', restrictInput);

    // Validation du formulaire lors de sa soumission
    $('#userForm').on('submit', function(e) {
        let isValid = true; // Variable pour suivre la validation du formulaire

        // Validation du champ userName et affichage d'un message d'erreur si nécessaire
        const namePattern = /^[A-Za-zÀ-ÿ'-]+$/;
        if (!namePattern.test($('#userName').val())) {
            isValid = false;
            $('#userNameError').text('Le nom contient des caractères invalides.');
            $('#userName').addClass('invalid');
        } else {
            $('#userNameError').text('');
            $('#userName').removeClass('invalid');
        }

        // Validation du champ firstName et affichage d'un message d'erreur si nécessaire
        if (!namePattern.test($('#firstName').val())) {
            isValid = false;
            $('#firstNameError').text('Le prénom contient des caractères invalides.');
            $('#firstName').addClass('invalid');
        } else {
            $('#firstNameError').text('');
            $('#firstName').removeClass('invalid');
        }

        // Validation du champ zipCode (code postal) et affichage d'un message d'erreur si nécessaire
        const zipPattern = /\d{5}( |$)$/;
        if (!zipPattern.test($('#zipCode').val())) {
            isValid = false;
            $('#zipCode').addClass('invalid');
            alert('Le code postal doit être composé de 5 chiffres.');
        } else {
            $('#zipCode').removeClass('invalid');
        }

        // Validation du champ phone (numéro de téléphone) et affichage d'un message d'erreur si nécessaire
        const phonePattern = /^\+?[0-9 .-]+$/;
        if (!phonePattern.test($('#phone').val())) {
            isValid = false;
            $('#phone').addClass('invalid');
            alert('Le numéro de téléphone contient des caractères invalides.');
        } else {
            $('#phone').removeClass('invalid');
        }

        // Validation du champ email et affichage d'un message d'erreur si nécessaire
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test($('#userMail').val())) {
            isValid = false;
            $('#userMail').addClass('invalid');
            alert('L\'adresse mail n\'est pas valide.');
        } else {
            $('#userMail').removeClass('invalid');
        }

        // Validation du champ userRole et affichage d'un message d'erreur si nécessaire
        const rolePattern = /^[A-Za-zÀ-ÖØ-öø-ÿ\s-]+$/;
        if (!rolePattern.test($('#userRole').val())) {
            isValid = false;
            $('#userRole').addClass('invalid');
            alert('Le poste contient des caractères invalides.');
        } else {
            $('#userRole').removeClass('invalid');
        }

        // Empêche l'envoi du formulaire si la validation a échoué
        if (!isValid) {
            e.preventDefault();
        }
    });

    /**************************************************************************************************************/


    // Gestion du clic sur le bouton de déconnexion
    $('#logoutButton').click(function() {
        console.log("Logout button clicked");
        // Logique de déconnexion ici
        // Par exemple, supprimer le token d'authentification de localStorage
        localStorage.removeItem('authToken');

        // Redirection vers la page de connexion
        window.location.href = 'authentication';
    });

    $('#userImage').change(function(e) {
        let filePath = $(this).val(); // Chemin du fichier
        let fileName = filePath.split(/[\\/]/).pop(); // Nom du fichier
        let newFilePath = '/assets/images/cards/' + fileName; // Nouveau chemin du fichier

        // Afficher le nouveau chemin pour vérification
        console.log('Nouveau chemin du fichier:', newFilePath);

        // Si nécessaire, mettez à jour la valeur de l'input (mais ce n'est pas recommandé car l'input file est en lecture seule pour des raisons de sécurité)
        // $(this).val(newFilePath);

        // Si vous avez besoin de ce nouveau chemin pour une autre opération, vous pouvez l'utiliser comme ci-dessus
    });

    ////     COM : Modal ajout utilisateur
    $('#userForm').on('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        console.log('Envoi des données :', formData); // Diagnostic

        $.ajax({
            type: 'POST',
            url: '/adminSubmitusers',  // Remplacez par l'URL de votre serveur de traitement
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
    // Vide les champs du formulaire apres fermeture du POP-UP
    $('#successModal').on('hidden.bs.modal', function () {
        $('#userForm')[0].reset();
    });
});

