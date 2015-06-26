// se activa cuando el documento este cargado
var search = null;
$(document).ready(function () {

    $("a[data-title=asignSearch]").click(function (){
        search = this.id;
        $('#btnSearch').text(search);
    });

    $('#inputSearch').keyup(function(e){
        if(e.keyCode == 13)
        {
            $valor = $('#inputSearch').val();

            if(search == "Artist" || search == "Title")
            {

                $.get(this.baseURI + '/search/' + search + "/"+ $valor , function (data) {
                    $table = "";
                    // variables
                    $('#tableIndex tbody').remove();
                    $table += '<table class="ui celled table" id="tableIndex"><thead><tr><th>Name</th><th>Artista</th><th>Route</th><th>Options</th></tr></thead><tody>';
                    for($i = 0; $i < data.data.length; $i++)
                    {
                        $table += '<tr><td>' + data.data[$i].name + '</td><td>'+ data.data[$i].nombre +'</td><td>'+ data.data[$i].genero +'</td>';
                        $table += '<td><a class="ui inverted blue button" id="'+data.data[$i].id+'" data-title="send" data-toggle="modal" data-target="#send" data-placement="top"><i class="icon Edit"></i>Send</a></td></tr>';
                    }
                    $table += "</tbody>";

                    document.getElementById('tableIndex').innerHTML = $table;




                });
            }
            else
            {
                $('#ErrorMsg').html("Select an Option").show().fadeOut(1000);
            }



        }
    });
});