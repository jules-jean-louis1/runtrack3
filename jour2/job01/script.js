document.addEventListener("DOMContentLoaded", function() 
{
/*     const btn1 = document.querySelector("#button");
    btn1.addEventListener("click", () =>
    {
        let article = document.getElementById("citation").innerHTML;
        console.log(article);
    });
 */
    let btn1 = document.querySelector("#button");
    btn1.addEventListener("click", citation);
    function citation()
    {
        let citation = document.getElementById("citation").innerHTML;
        console.log(citation);
    }
});