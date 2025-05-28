const sections = {
    "/": ["Contact-info", "FAQ", "À propos de nous"],
    "nettoyage-proprete": [""],
    "securite-cynophile": [""],
    "securite-electronique": [""],
    "securite-gardiennage": [""],
    "securite-incendie": [""],
    "surveillance-evenementielle": [""],
    "services": ["Services"],
    "offres": ["Offres", "Recrutement"],
    "contact": ["Contact"]
};

const flatSections = Object.entries(sections).flatMap(([page, ids]) =>
    ids.map(id => ({ page, id }))
);

function updateSuggestions() {
    const query = document.getElementById("searchInput").value.toLowerCase().trim();
    const suggestionsContainer = document.getElementById("suggestions");

    suggestionsContainer.innerHTML = '';

    if (!query) {
        suggestionsContainer.classList.add("hidden");
        return;
    }

    const filtered = flatSections.filter(s =>
        s.id.toLowerCase().includes(query)
    );

    if (filtered.length === 0) {
        const li = document.createElement("li");
        li.className = "px-4 py-2 text-gray-500";
        li.textContent = "Aucune section trouvée";
        suggestionsContainer.appendChild(li);
        suggestionsContainer.classList.remove("hidden");
        return;
    }

    filtered.forEach(s => {
        const li = document.createElement("li");
        li.className = "px-4 py-2 hover:bg-gray-200 cursor-pointer transition";
        li.textContent = s.id;
        li.onclick = () => {
            window.location.href = `${s.page}#${s.id}`;
        };
        suggestionsContainer.appendChild(li);
    });

    suggestionsContainer.classList.remove("hidden");
}

function performSearch() {
    const query = document.getElementById("searchInput").value.toLowerCase().trim();
    const result = flatSections.find(s => s.id.toLowerCase().includes(query));
    if (result) {
        window.location.href = `${result.page}#${result.id}`;
    } else {
        alert("Aucune section trouvée.");
    }
}

function hideSuggestions() {
    const suggestionsContainer = document.getElementById("suggestions");
    suggestionsContainer.classList.add("hidden");
}

document.getElementById("searchInput").addEventListener("input", updateSuggestions);
document.getElementById("searchBtn").addEventListener("click", performSearch);

document.addEventListener("click", function (e) {
    const searchInput = document.getElementById("searchInput");
    const suggestions = document.getElementById("suggestions");
    if (!searchInput.contains(e.target) && !suggestions.contains(e.target)) {
        hideSuggestions();
    }
});


