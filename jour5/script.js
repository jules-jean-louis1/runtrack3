$(document).ready(function() {
    const btnRegIndex = $('#inscription_index');
    const formContainer = $('#display_form_register');
    const formRegister = $('#inscription_form');
    const btnRegForm = $('#submitBtnRegister');

    btnRegIndex.click(function() {
        fetch("inscription.php")
            .then(response => response.text())
            .then(data => {
                formContainer.html(data);
            });
    });
    formRegister.submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        fetch("inscription.php", {
                method: "POST",
                body: formData
            }) .then(function(response) {
                return response.text();
            }).then(function (text){
                console.log(text);
            }).catch(function(error) {
                console.log(error);
            });
        });

    

});
