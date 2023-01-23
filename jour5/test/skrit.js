// page index.php

document.addEventListener('DOMContentLoaded', function() {
    const btnRegIndex = document.getElementById('inscription_index');
    const formContainer = document.getElementById('display_form_register');
  
    btnRegIndex.addEventListener('click', function() {
      $.ajax({
        url: 'inscription.php',
        success: function(response) {
          formContainer.innerHTML = response;
          const formRegister = document.getElementById('form_register');
          formRegister.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            $.ajax({
              url: "inscription.php",
              type: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                console.log(response);
              },
              error: function(error) {
                console.log(error);
              }
            });
          });
        },
        error: function(error) {
          console.log(error);
        }
      });
    });
  });
  