document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const errorMsg = document.getElementById("error-msg");

    form.addEventListener("submit", (e) => {
        if (!email.value || !password.value) {
        e.preventDefault();
        errorMsg.textContent = "Veuillez remplir tous les champs.";
        }
    });
});


