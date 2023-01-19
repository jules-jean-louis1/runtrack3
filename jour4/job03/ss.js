$(document).ready(function() 
{
    const url = 'pokemon.json';
    const result = $('#result');
    
    $("#submit").on('click', function(event) {
        event.preventDefault();
        const id = parseInt($('#getid').val());
        const nom = $('#username').val();
        const type = $('#type_liste').val();

        fetcher();
        
        function fetcher() {
            fetch(url)
                .then((response) => response.json()) 
                .then((json) => toHTML(json))
        }
        
        function toHTML(json) {
            for (let i = 0; i<json.length; i++) {
                const item = json[i];
                if (item.id == id && nom == item.name.english || nom == item.name.japanese || nom == item.name.chinese || nom == item.name.french) {
                    result.append(`<p class="alert alert-success">
                    ID: ${item.id} Type: ${item.type} Nom: French ${item.name.french}, English ${item.name.english}, Japanese ${item.name.japanese}, Chinese ${item.name.chinese}
                    </p>`);
                } else {
                    result.append(`<p class="alert alert-danger">Les Filtres indiquées ne correspondent à aucun Pokémon.</p>`);
                }
                
            } 
        }
        
    });

});