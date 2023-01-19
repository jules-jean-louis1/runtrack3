$(document).ready(function() {
    setInterval(function(){
        $.ajax({
            url: 'getData.php',
            type: 'GET',
            success: function(response) {
                var data = response;
                var tbody = $('#data-table tbody');
                tbody.empty();
                for (var i = 0; i < data.length; i++) {
                    var row = data[i];
                    tbody.append(`<tr>
                        <td>` + row.id + `</td>
                        <td>` + row.name + `</td>
                        <td>` + row.message + `</td>
                    </tr>`);
                }
            }
        });
    }, 5000);
});