let registerDisplay = document.querySelector("#register-diplay-form");
let formContainer = document.querySelector("#form-container");

function errorBorder(input) {
    input.className = "bg-slate-200 border-2 border-red-500 px-2 py-2 mx-2 rounded";
}
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
        registerForm.addEventListener("submit", async (ev) => {
            ev.preventDefault();
            let formData = new FormData(registerForm);
        
            // Get the password and confirm password fields
            let password = formData.get("password");
            let password2 = formData.get("password2");
        
            // Check if the passwords match
            if (password !== password2) {
                errorBorder(document.querySelector("#password"));
                errorBorder(document.querySelector("#password2"));
                /* alert("Sorry, the passwords do not match. Please try again."); */
            } else {
                let taken = await fetch('check-username.php', {
                    method: 'POST',
                    body: formData
                })
                    .then((response) => response.json())
                    .then((data) => data.taken);
        
                if (taken) {
                    alert("Sorry, that username is already taken. Please choose a different one.");
                } else {
                    // Submit the form
                    await fetch('register.php', {
                        method: 'POST',
                        body: formData
                    })
                        .then((response) => {
                            if (response.status === 201) {
                                alert("Your account has been created!");
                            }
                        });
                }
            }
        });
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

/* document.getElementById("test_btn").addEventListener("click", function(){
    document.getElementById("test_btn").className = "border-2 border-green-500 hover:border-red-300 rounded bg-black px-4 py-2";
  }); */
  