/* document.addEventListener("DOMContentLoaded", () => {

    for(i=1; i <= 6; i++)
    {
	    $("#melangees").append("<img id="+'img'+i+" src='src/arc"+i+".png'/>");
    }

    let melangees = $("#melangees");
    

    $("#button").click(() =>{
        let shuffle = melangees[0];
        for ( let i = 0; i <= shuffle.children.length; i++ ){
            shuffle.appendChild(shuffle.children[Math.random() * i | 0]); 
        }
    }); 
    $("#melangees img").draggable({
        helper: "clone"
    });
    $("#rangees").droppable({
        drop: function(event, ui) {
            $(this).append($(ui.draggable));
        }
    });
        

}); */

document.addEventListener("DOMContentLoaded", () => {

    // Append images to the "melangees" div
    for(i=1; i <= 6; i++) {
        $("#melangees").append("<img id="+'img'+i+" src='src/arc"+i+".png'/>");
    }

    // Make images draggable
    $("#melangees img").draggable({
        helper: "clone",
        revert: "invalid"
    });

    // Make "rangees" div droppable
    $("#rangees").droppable({
        drop: function(event, ui) {
            $(this).append($(ui.draggable));
        }
    });
    
    // Make "rangees" div sortable
    $("#rangees").sortable();
    $("#rangees").disableSelection();

    // shuffle the images on button click
    $("#button").click(() =>{
        let shuffle = $("#melangees")[0];
        for ( let i = 0; i <= shuffle.children.length; i++ ){
            shuffle.appendChild(shuffle.children[Math.random() * i | 0]); 
        }
    }); 
});
