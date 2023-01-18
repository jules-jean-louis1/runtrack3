window.addEventListener("DOMContentLoaded", (event) => {
    
    let footer = document.querySelector("footer")
    window.addEventListener("scroll", () =>{
        let y = window.scrollY;
        if ( y > 800){
            footer.className = "rouge"
        }
        if ( y > 1600){
            footer.className = "bleu"
        } 
        if ( y > 2400){
            footer.className = "orange"
        } 
        if ( y > 3200 ){
            footer.className = "vert"
        } 
        if ( y > 4000){
            footer.className = "jaune"
        }
    });     
});