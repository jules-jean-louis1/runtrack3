document.addEventListener("DOMContentLoaded", () => {

    for(i=1; i <= 6; i++)
    {
	    $("#melangees").append("<img id="+'img'+i+" src='src/arc"+i+".png'/>");
    }

// Utiliser l'algorithme de Fisher-Yates pour mélanger les images

    let melangees = $("#melangees");
    

    $("#button").click(() =>{
        let shuffle = melangees[0];
        for ( let i = 0; i <= shuffle.children.length; i++ ){
            shuffle.appendChild(shuffle.children[Math.random() * i | 0]); 
        }
    }); 
        

});


