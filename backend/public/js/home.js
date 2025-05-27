document.addEventListener('DOMContentLoaded', () => {
    const listeOffres = document.getElementById('liste-offres');
    const form = document.getElementById('form-offre');
    const candidaturesContainer = document.getElementById('liste-candidatures');
    const sectionCandidatures = document.getElementById('section-candidatures');

    // Charger les offres publiées
    function chargerOffres() {
        fetch('/api/offres')
            .then(res => res.json())
            .then(data => {
                listeOffres.innerHTML = '';
                data.forEach(offre => {
                    const div = document.createElement('div');
                    div.className = 'offre bg-white rounded-xl shadow-md p-6 flex flex-col justify-between border border-gray-200 hover:shadow-lg transition cursor-pointer';
                    div.dataset.id = offre.id;
                    div.innerHTML = `
                        <h3 class="text-2xl font-semibold text-blue-700 mb-2">${offre.titre}</h3>
                        <p class="text-gray-700 mb-4">${offre.description}</p>
                        <div class="flex items-center justify-between mt-4">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" ${offre.publiee ? 'checked' : ''} onchange="changerPublication(${offre.id}, this.checked)" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-500 rounded-full peer peer-checked:bg-blue-600 transition"></div>
                            </label>
                            <div class="flex space-x-2">
                                <button onclick='modifierOffre(${JSON.stringify(offre)})'
                                    class="px-4 py-2 bg-blue-100 text-blue-700 hover:bg-blue-200 rounded-md text-sm font-medium transition">
                                    <i class="fa-solid fa-pen mr-1"></i> Modifier
                                </button>
                                <button onclick="supprimerOffre(${offre.id})"
                                    class="px-4 py-2 bg-red-100 text-red-600 hover:bg-red-200 rounded-md text-sm font-medium transition">
                                    <i class="fa-solid fa-trash mr-1"></i> Supprimer
                                </button>
                            </div>
                        </div>
                    `;

                    div.addEventListener('click', (e) => {
                        if (e.target.closest('button')) return;
                        const offreId = div.dataset.id;
                        fetch(`/api/candidatures/${offreId}`)
                            .then(response => {
                                if (!response.ok) throw new Error("Erreur lors de l'appel API");
                                return response.json();
                            })
                            .then(candidatures => {
                                candidaturesContainer.innerHTML = '';

                                if (candidatures.length === 0) {
                                    candidaturesContainer.innerHTML = '<p class="text-gray-500 italic">Aucune candidature reçue pour cette offre.</p>';
                                } else {
                                    candidatures.forEach(c => {
                                        const div = document.createElement('div');
                                        div.className = 'bg-gray-100 p-4 rounded-lg shadow';
                                        div.innerHTML = `
                                            <p><strong>Candidat :</strong> ${c.prenom} ${c.nom}</p>
                                            <p class="mb-2">${c.lettre}</p>
                                            <a href="/cv/${c.cv}" target="_blank" class="text-blue-600 hover:underline">
                                                <i class="fa-solid fa-download"></i> Télécharger le CV
                                            </a>
                                        `;
                                        candidaturesContainer.appendChild(div);
                                    });
                                }

                                sectionCandidatures.classList.remove('hidden');
                                sectionCandidatures.scrollIntoView({ behavior: 'smooth' });
                            })
                            .catch(error => {
                                console.error("Erreur lors de la récupération des candidatures :", error);
                            });
                    });

                    listeOffres.appendChild(div);
                });
            });
    }

    // Soumission du formulaire
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

    window.changerPublication = (id, publiee) => {
        fetch(`/api/offres/${id}/publication`, {
            method: 'PUT',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({ publiee })
        })
        .then(res => res.json())
        .then(() => {
            // Optionnel : affichage ou feedback
            console.log(`Offre ${id} mise à jour (publiee=${publiee})`);
        });
    };

    chargerOffres();
});


