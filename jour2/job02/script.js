document.addEventListener("DOMContentLoaded", function()
{
/*     // fonction qui affiche ou cache le texte
    const btn2 = document.getElementById("button");
    let btn1 = document.getElementById("citation");

    function showhide()
    {
        if (btn1.style.display == "none")
        {
            btn1.style.display = "";
        } else
        {
            btn1.style.display = "none";
        }
    }
    btn2.addEventListener("click", showhide); */

    
/*     let isVisible = false;

    function showhide()
    {

        const mainArticle = document.querySelector("#phrase");
        const sentence = document.createElement("article");
        sentence.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
        
        

        if (!isVisible)
        {
            mainArticle.appendChild(sentence)
            sentence.style.visibility = "visible";
            isVisible = true;
        } elseif (isVisible == true)
        {
            sentence.style.visibility = "hidden";
            isVisible = false;
        }
    }
    const btn2 = document.querySelector("#button");
    btn2.addEventListener("click", showhide); */
    let isVisible = false;
    let sentence;

    function showhide() {
        const mainArticle = document.querySelector("#phrase");
        if (!isVisible) {
            if (!sentence) {
                sentence = document.createElement("article");
                sentence.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
                mainArticle.appendChild(sentence);
            }
            sentence.style.display = "block";
            isVisible = true;
        } else {
            sentence.style.display = "none";
            isVisible = false;
        }
    }
    const btn2 = document.querySelector("#button");
    btn2.addEventListener("click", showhide);

});