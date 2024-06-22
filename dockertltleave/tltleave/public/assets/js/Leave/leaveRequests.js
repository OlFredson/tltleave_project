document.addEventListener('DOMContentLoaded', function() {
    function calculateDays() {
        let beginDate = new Date(document.getElementById('beginDate').value);
        let endDate = new Date(document.getElementById('endDate').value);

        // Assurez-vous que beginDate est toujours avant endDate
        if (beginDate > endDate) {
            alert("La date de début doit être antérieure à la date de fin.");
            document.getElementById('nbrDays').value = 0;
            return;
        }

        let diffDays = 0;
        let currentDate = new Date(beginDate);

        // Itérer sur chaque jour entre les deux dates
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
        document.getElementById('nbrDays').value = diffDays;
    }

    // Ajouter un écouteur d'événement pour détecter les changements de dates
    document.getElementById('beginDate').addEventListener('change', calculateDays);
    document.getElementById('endDate').addEventListener('change', calculateDays);
});