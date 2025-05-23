document.addEventListener('DOMContentLoaded', () => {
    const listeOffres = document.getElementById('liste-offres');
    const form = document.getElementById('form-offre');

    function chargerOffres() {
        fetch('/api/offres')
            .then(res => res.json())
            .then(data => {
                listeOffres.innerHTML = '';
                data.forEach(offre => {
                    const div = document.createElement('div');
                    div.className = 'bg-white rounded-xl shadow-md p-6 flex flex-col justify-between border border-gray-200 hover:shadow-lg transition';
                    div.innerHTML = `
                        <h3 class="text-2xl font-semibold text-blue-700 mb-2">${offre.titre}</h3>
                        <p class="text-gray-700 mb-4">${offre.description}</p>
                        <div class="flex justify-end space-x-4">
                            <button onclick='modifierOffre(${JSON.stringify(offre)})'
                                class="px-4 py-2 bg-blue-100 text-blue-700 hover:bg-blue-200 rounded-md text-sm font-medium transition">
                                <i class="fa-solid fa-pen mr-1"></i> Modifier
                            </button>
                            <button onclick="supprimerOffre(${offre.id})"
                                class="px-4 py-2 bg-red-100 text-red-600 hover:bg-red-200 rounded-md text-sm font-medium transition">
                                <i class="fa-solid fa-trash mr-1"></i> Supprimer
                            </button> 
                        </div>
                    `;
                    listeOffres.appendChild(div);
                });
            });
    }

    form.addEventListener('submit', e => {
        e.preventDefault();
        const titre = form.titre.value.trim();
        const description = form.description.value.trim();

        fetch('/api/offres', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({titre, description})
        }).then(() => {
            form.reset();
            chargerOffres();
        });
    });

    window.supprimerOffre = (id) => {
        if (confirm("Supprimer cette offre ?")) {
            fetch(`/api/offres/${id}`, {
                method: 'DELETE'
            }).then(() => chargerOffres());
        }
    };

    window.modifierOffre = (offre) => {
        const nouveauTitre = prompt("Nouveau titre :", offre.titre);
        const nouvelleDescription = prompt("Nouvelle description :", offre.description);

        if (nouveauTitre && nouvelleDescription) {
            fetch(`/api/offres/${offre.id}`, {
                method: 'PUT',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({titre: nouveauTitre, description: nouvelleDescription})
            }).then(() => chargerOffres());
        }
    };

    chargerOffres();
});


