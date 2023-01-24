let registerDisplay = document.querySelector("#register-diplay-form");
let formContainer = document.querySelector("#form-container");

registerDisplay.addEventListener("click", async (ev) => {
    await fetch('register.php')
        .then((response) => {
            console.log(response);
            if (response.ok) {
                return response.text();
            }
        })
        .then((html) => {
            formContainer.innerHTML = html;
        });
    let registerForm = document.querySelector("#register-form")
    registerForm.addEventListener("submit", async (ev) => {
        ev.preventDefault();
        let formData = new FormData(registerForm);
        await fetch('register.php', {
            method: 'POST',
            body: formData
        })
            .then((response) => {
                if (response.status === 201) {
                    alert("Votre compte a bien été créé");
                }
            })
        })
});
/* 
btnLogin.addEventListener("click", async (ev) => {
    fetch('login.php')
        .then((response) => {
            if (response.ok) {
                return response.text();
            }
        })
        .then((html) => {
            containerForm.innerHTML = html;
        });
        let loginForm = document.querySelector("#formLogin");
        loginForm.addEventListener("submit", async(ev) => {
            await ev.preventDefault();
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
});  */