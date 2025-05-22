document.addEventListener('DOMContentLoaded', () => {
    const listeOffres = document.getElementById('liste-offres');
    const form = document.getElementById('form-offre');

    function chargerOffres() {
        fetch('../php/fonction.php?action=get_offres')
            .then(res => res.json())
            .then(data => {
                listeOffres.innerHTML = '';
                data.forEach(offre => {
                    const div = document.createElement('div');
                    div.className = 'bg-white p-4 rounded shadow';
                    div.innerHTML = `
                        <h3 class="text-xl font-semibold">${offre.titre}</h3>
                        <p class="mb-2">${offre.description}</p>
                        <button onclick="supprimerOffre(${offre.id})" class="text-red-500 hover:underline mr-4">Supprimer</button>
                        <button onclick='modifierOffre(${JSON.stringify(offre)})' class="text-blue-500 hover:underline">Modifier</button>
                    `;
                    listeOffres.appendChild(div);
                });
            });
    }

    form.addEventListener('submit', e => {
        e.preventDefault();
        const titre = form.titre.value.trim();
        const description = form.description.value.trim();

        fetch('../php/fonction.php?action=add_offre', {
            method: 'POST',
            body: JSON.stringify({ titre, description })
        }).then(() => {
            form.reset();
            chargerOffres();
        });
    });

    window.supprimerOffre = (id) => {
        if (confirm("Supprimer cette offre ?")) {
            fetch(`../php/fonction.php?action=delete_offre&id=${id}`)
                .then(() => chargerOffres());
        }
    };

    window.modifierOffre = (offre) => {
        const nouveauTitre = prompt("Nouveau titre :", offre.titre);
        const nouvelleDescription = prompt("Nouvelle description :", offre.description);

        if (nouveauTitre && nouvelleDescription) {
            fetch('../php/fonction.php?action=update_offre', {
                method: 'POST',
                body: JSON.stringify({ id: offre.id, titre: nouveauTitre, description: nouvelleDescription })
            }).then(() => chargerOffres());
        }
    };

    chargerOffres();
});
