window.addEventListener("DOMContentLoaded", (event) => {

    let p = $("p");
    p.hide();

    $("#show").click(()=>{
        p.show();
    });
    $("#hide").click(()=>{
        p.hide();
    });
    $("#color").click(()=>{
        p.css("color", p.css("color") === "blue" ? "black" : "blue");
    });
    
    
});