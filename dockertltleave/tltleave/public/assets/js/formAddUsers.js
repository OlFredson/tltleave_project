$(document).ready(function() {
    function restrictInput(event) {
        const pattern = /^[A-Za-zÀ-ÿ'-]+$/;
        const input = $(this).val();
        const errorField = $(this).next('.error');
        if (!pattern.test(input)) {
            $(this).val(input.replace(/[^A-Za-zÀ-ÿ'-]+/g, ''));
            errorField.text('Merci de ne saisir que des lettres.');
            $(this).addClass('invalid');
        } else {
            errorField.text('');
            $(this).removeClass('invalid');
        }
    }

    $('#userName, #firstName').on('input', restrictInput);

    $('#userForm').on('submit', function(e) {
        let isValid = true;

        // Validate userName and firstName
        const namePattern = /^[A-Za-zÀ-ÿ'-]+$/;
        if (!namePattern.test($('#userName').val())) {
            isValid = false;
            $('#userNameError').text('Le nom contient des caractères invalides.');
            $('#userName').addClass('invalid');
        } else {
            $('#userNameError').text('');
            $('#userName').removeClass('invalid');
        }
        if (!namePattern.test($('#firstName').val())) {
            isValid = false;
            $('#firstNameError').text('Le prénom contient des caractères invalides.');
            $('#firstName').addClass('invalid');
        } else {
            $('#firstNameError').text('');
            $('#firstName').removeClass('invalid');
        }

        // Validate zipCode
        const zipPattern = /^\d{5}$/;
        if (!zipPattern.test($('#zipCode').val())) {
            isValid = false;
            $('#zipCode').addClass('invalid');
            alert('Le code postal doit être composé de 5 chiffres.');
        } else {
            $('#zipCode').removeClass('invalid');
        }

        // Validate phone
        const phonePattern = /^\+?[0-9 .-]+$/;
        if (!phonePattern.test($('#phone').val())) {
            isValid = false;
            $('#phone').addClass('invalid');
            alert('Le numéro de téléphone contient des caractères invalides.');
        } else {
            $('#phone').removeClass('invalid');
        }

        // Validate email
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test($('#userMail').val())) {
            isValid = false;
            $('#userMail').addClass('invalid');
            alert('L\'adresse mail n\'est pas valide.');
        } else {
            $('#userMail').removeClass('invalid');
        }

        // Validate userRole
        const rolePattern = /^[A-Za-z-]+$/;
        if (!rolePattern.test($('#userRole').val())) {
            isValid = false;
            $('#userRole').addClass('invalid');
            alert('Le poste contient des caractères invalides.');
        } else {
            $('#userRole').removeClass('invalid');
        }

        if (!isValid) {
            e.preventDefault();
        }
    });
    $('#logoutButton').click(function() {
        console.log("Logout button clicked");
        // Logique de déconnexion ici
        // Par exemple, supprimer le token d'authentification
        localStorage.removeItem('authToken');

        // Rediriger vers la page de connexion
        window.location.href = 'authentication';
    });
});


