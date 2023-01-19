$(document).ready(function()
{
    
    
     $("#submit").on('click', function(event)
    {
        event.preventDefault();
        let id = $('#getid').val();
        let nom = $('#username').val();
        let type = $('#type_liste').val();
        let result = $('#result');
        if ( 1 == id ) {
            result.innerHTML += `<p class="alert alert-danger">Erreur</p>`;
        }
        async function fetchPokemon() {
            const r = await fetch ('pokemon.json');
            if (r.ok === true) {
                return r.json();
            } else {
                throw new Error('Erreur')
            }
        }
    
        fetchPokemon().then(data => {
            console.log(id, nom, type);
            for (let i = 0; i < data.length; i++) {
                const item = data[i];
                console.log(item.id);
                
                result.innerHTML += `<p>ID: ${item.id} Type: ${item.type}</p>`;
                for (let j = 0; j < Object.keys(item.name).length; j++){
                    /* console.log(Object.keys(item.name)[j]);
                    result.innerHTML += `${Object.keys(item.name)[j]}: ${item.name[Object.keys(item.name)[j]]} `;*/
                    
                } 
              }
        })
    }); 
    


});

/* $('#result').append(`<p>${display[i].name}</p>`); */