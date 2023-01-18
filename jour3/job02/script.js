document.addEventListener("DOMContentLoaded", () => {

    // 1. Melanger les photos avec la fonction shuffle.
    let but = $("#button");
    let melangees = $("#melangees");
    let rangees = $("#rangees");
    let img = $("img");

    
    
    $("#button").click(() =>{
        let shuffle = melangees[0];
        for ( let i = 0; i <= shuffle.children.length; i++ ){
            shuffle.appendChild(shuffle.children[Math.random() * i | 0]); 
        }
    }); 
});