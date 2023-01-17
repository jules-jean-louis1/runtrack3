document.addEventListener("DOMContentLoaded", function ()
{
    document.addEventListener("keypress", function(event) {
        let key = event.key;
        if (key >= 'a' && key <= 'z') {
            const textarea = document.getElementById("keylogger");
            if (document.activeElement == textarea) {
                textarea.value += key + key;
            } else {
            textarea.value += key;
            }
        }
    });
}
);