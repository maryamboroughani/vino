import App from "../components/App.js";
import Alerte from "../components/Alerte.js";

(function () {
    new App();

    const alerte = document.querySelector(".alerte");

    if (alerte) {
        new Alerte(alerte);
    }

    const loginFormHTML = document.querySelector("form");

    loginFormHTML.addEventListener("submit", login);
})();

async function login(event) {
    event.preventDefault();

    try {
		const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const email = document.querySelector("[name='email']").value;
        const password = document.querySelector("[name='password']").value;

        const response = await fetch(`${App.instance.baseURL}/api/login`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
            body: JSON.stringify({
                email: email,
                password: password,
            }),
        });

        const data = await response.json();

        if (response.ok) {
            // sauvegarder token dans le local storage
            localStorage.setItem("token", data.token);
        }
    } catch (error) {
        console.log(error);
    } finally {
        document.querySelector("form").submit();
    }
}
