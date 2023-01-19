/*
Créez un button ayant comme id “button”. Créez un fichier expression.txt
contenant votre expression favorite. Lorsqu’un utilisateur clique sur le
bouton, à l’aide d’AJAX, récupérez le contenu du fichier expression.txt,
placez le dans un paragraphe et insérez le dans le corps de votre page. */

$(document).ready(function(){

    $("#button").click(function(){
        const x = $(this).text();
        if (x == "Afficher l'expression") 
        {
            $(this).text("Cacher l'expression");
            $.ajax({
                url: "expression.txt",
                success: function(result){
                    $("#result").html(result);
                }
            }); 
        } else {
            $(this).text("Afficher l'expression");
            $("#result").html("");
        }
    });
});

/* Ce code utilise la bibliothèque jQuery pour créer un événement de clic pour un élément ayant l'ID "button". 
Lorsque le bouton est cliqué, le texte du bouton est vérifié. Si le texte est "Afficher l'expression", 
le texte du bouton est changé en "Cacher l'expression" et une requête AJAX est effectuée pour récupérer 
le contenu d'un fichier nommé "expression.txt" qui est ensuite inséré dans un élément avec l'ID "result". 
Si le texte n'est pas "Afficher l'expression", le texte du bouton est remis à "Afficher l'expression" et 
l'élément "result" est vidé. */
