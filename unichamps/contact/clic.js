async function cliclic(value) {
    navigator.clipboard.writeText(value).then(function () {
        /* presse-papiers modifié avec succès */
        alert("élément copié !");
    }, function () {
        /* échec de l’écriture dans le presse-papiers */
        alert("élément PAS copié !");
    });
};


