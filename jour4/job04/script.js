$(document).ready(function() {
/*     setInterval(function(){
        $.ajax({
            url: 'index.php',
            type: 'GET',
            success: function(response) {
                let data = response;
                let tbody = $('#data_display');
                tbody.empty();
                for (let i = 0; i < data.length; i++) {
                    console.log(row);
                    let row = data[i];
                    tbody.append(`<tr>
                                    <td>` + row.id + `</td>
                                    <td>` + row.nom + `</td>
                                    <td>` + row.prenom + `</td>
                                    <td>` + row.email + `</td>
                                </tr>`);
                }
            }
        });
    }, 5000); */
    $.ajax({
        url: 'index.php',
        type: 'GET',
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        success: function(result) 
        {
            BindDataWithJqueyEach(result);
            let data = response;
            let tbody = $('#data_display');
            tbody.empty();
            for (let i = 0; i < data.length; i++) {
                
                let row = data[i];
                
                tbody.append(`<tr>
                                <td>` + row.id + `</td>
                                <td>` + row.nom + `</td>
                                <td>` + row.prenom + `</td>
                                <td>` + row.email + `</td>
                            </tr>`);
            }
        }
    });
});