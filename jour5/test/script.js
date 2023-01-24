const btnRegister = document.querySelector("#register");
const btnLogin = document.querySelector("#login");
const btnFormRegister = document.querySelector("#submit-reg");
const containerForm = document.querySelector("#containerForm");

btnRegister.addEventListener("click", () => {
    fetch('register.php')
        .then((response) => {
            if (response.ok) {
                return response.text();
            }
        })
        .then((html) => {
            containerForm.innerHTML = html;
        });
        let registerForm = document.getElementById("formRegister");
        registerForm.addEventListener("submit", async(ev) => {
            ev.preventDefault();
            let formData = new FormData(registerForm);
            fetch('register.php', {
                method: 'POST',
                body: formData
                })
                .then((response) => {
                    console.log(response);
                })
        });
})
/* btnRegister.addEventListener("click", async (ev) => {
    fetch('register.php')
        .then((response) => {
            if (response.ok) {
                return response.text();
            }
        })
        .then((html) => {
            registerDisplay.innerHTML = html;
        });
        let registerForm = document.querySelector("#formRegister");
        registerForm.addEventListener("submit", async(ev) => {
            ev.preventDefault();
            let formData = new FormData(registerForm);
            fetch('register.php', {
                method: 'POST',
                body: formData
                })
                .then((response) => {
                    if (response === 201) {
                        alert("Vous êtes bien inscrit");
                    }
                })
        });
});

btnLogin.addEventListener("click", async (ev) => {
    fetch('login.php')
        .then((response) => {
            if (response.ok) {
                return response.text();
            }
        })
        .then((html) => {
            registerDisplay.innerHTML = html;
        });
        let loginForm = document.querySelector("#formLogin");
        loginForm.addEventListener("submit", async(ev) => {
            ev.preventDefault();
            let loginformData = new FormData(loginForm);
            fetch('login.php', {
                method: 'POST',
                body: loginformData
                })
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    let title = document.createAttribute('h1');
                    title.innerHTML = 'Bienvenue ' + data.username;
                    registerDisplay.appendChild(title);
                })
        });
}); */