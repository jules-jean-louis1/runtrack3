document.addEventListener('DOMContentLoaded', function() {
    const btnRegIndex = $('#inscription_index');
    const formContainer = $('#display_form_register');
    const formRegister = $('#form_register');
    const btnRegForm = $('#submitBtnRegister');

    btnRegIndex.click(function() {
        fetch("inscription.php")
            .then(response => response.text())
            .then(data => {
                formContainer.html(data);
            });
    });
    formRegister.submit(function(event) {
        event.stopImmediatePropagation();
        const formData = new FormData(this);
        $.ajax({
            url: "inscription.php",
            type: "POST",
            data: formData,
            processData: false,  // Important, indique de ne pas traiter les données comme une chaîne
            contentType: false, // Important, indique de ne pas définir le type de contenu
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
        return false;
    });
});
