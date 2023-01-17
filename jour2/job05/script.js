document.addEventListener("DOMContentLoaded", function() {
    // Your code here
    
window.onscroll = function() {
    var scroll = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
    var footer = document.querySelector("footer");
    footer.style.backgroundColor = "rgb(" + (255 * scroll) + ", " + (255 * scroll) + ", " + (255 * scroll) + ")";
};
        
});