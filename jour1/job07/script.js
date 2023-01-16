function jourTravaille(date)
{
    // On déclare les variables
    let jour = date.getDay();
    let mois = date.getMonth() + 1;
    let annee = date.getFullYear();
    let jourSemaine = date.getDay();
    // On declare un tableau contenant les jours fériés
    const joursFeries = 
    [
        new Date(2020, 1, 1),
        new Date(2020, 4, 12),
        new Date(2020, 4, 13),
        new Date(2020, 5, 1),
        new Date(2020, 5, 8),
        new Date(2020, 5, 21),
        new Date(2020, 5, 31),
        new Date(2020, 6, 1),
        new Date(2020, 7, 14),
        new Date(2020, 8, 15),
        new Date(2020, 11, 1),
        new Date(2020, 11, 11),
        new Date(2020, 12, 25),
    ];
    // On vérifie si la date est un jour férié ou un week-end
    if (joursFeries.includes(date))
    {
        console.log("Le " + jour + "/" + mois + "/" + annee + " est un jour férié");
    } else if (jourSemaine == 0 || jourSemaine == 6)
    {
        console.log("Le " + jour + "/" + mois + "/" + annee + " est un week-end");
    } else
    {
        console.log("Le " + jour + "/" + mois + "/" + annee + " est un jour travaillé");
    }
}

// Pour corrigé l'erreur getDay() non défini, il faut d'abord définir la date dans une variable.
// Créer une instance de la classe Date en utilisant "new Date()".
// On déclare la variable date


