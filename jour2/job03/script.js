document.addEventListener("DOMContentLoaded", function()
{
    // parseInt() convertit une chaîne de caractères en nombre entier, ne fonctionne pas avec des nombres à virgule.
    function addone()
    {
        let counter = document.getElementById("compteur");
        counter.textContent = parseInt(counter.textContent) + 1;
    }


    function reset()
    {
        let compteur = document.getElementById("compteur");
        compteur.textContent = 0;
    }
    
    // appel de la fonction addone
    let btn1 = document.querySelector("#button");
    btn1.addEventListener("click", addone);
    // appel de la fonction reset
    let btn2 = document.querySelector("#reset");
    btn2.addEventListener("click", reset);
});