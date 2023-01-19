$(document).ready(function()
{
    
    
    $("#submit").on('click', function(event)
    {
        const getId = $('#getid').val();
        const getNom = $('#username').val();
        const getTypes = $('#type_liste').val();
        event.preventDefault();
        
        
        
    });
    async function fetchPokemon() {
        const r = await fetch ('pokemon.json');
        if (r.ok === true) {
            return r.json();
        } else {
            throw new Error('Erreur')
        }
    }
    fetchPokemon().then(function(data) {
        console.log(data);
    }).catch(function(error) {
        console.log(error);
    });
});
