$(document).ready(function()
{
    
    
    $("#submit").on('click', function(event)
    {
        const id = $('#getid').val();
        const nom = $('#username').val();
        const type = $('#type_liste').val();
        event.preventDefault();
        
        async function fetchPokemon() {
            const r = await fetch ('pokemon.json');
            if (r.ok === true) {
                return r.json();
            } else {
                throw new Error('Erreur')
            }
        }
        fetchPokemon().then(data => {
            let filterData = data.filter(item => {
                if (id && item.id !== id) {
                    return false;
                  }
                  if (nom && item.nom !== nom) {
                    return false;
                  }
                  if (type && item.type !== type) {
                    return false;
                  }
                  return true;
                });
                let resultHTML = "";
                filteredData.forEach(item => {
                  resultHTML += `<p>ID: ${item.id} Nom: ${item.nom} Type: ${item.type}</p>`;
                });
          
                document.getElementById("result").innerHTML = resultHTML;
              });
    });
});
