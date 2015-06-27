// se activa cuando el documento este cargado
var idDelete = null;
$(document).ready(function () {



$('#Artist').click(function(e){
     $( "#inputSearch" ).autocomplete({
      source: "search/autocompleteArtistas",
      minLength: 1,
      select: function(event, ui) {
        $('#inputSearch').val(ui.item.value);
      }
    });
 })

$('#Title').click(function(e){
     $( "#inputSearch" ).autocomplete({
      source: "search/autocompleteTitle",
      minLength: 1,
      select: function(event, ui) {
        $('#inputSearch').val(ui.item.value);   
    }
    });
 })



    // se activa cuando se quiere editar algun usuario
    $("a[data-title=edit]").click(function () {

        var id = this.id;

        // obtiene los datos del usuario para editar
        $.get(this.baseURI + '/' + id + '/edit', function (data) {
                data = JSON.parse(data);
            // variables
            var name = data.nombre;
            var gender = data.genero;

            // recorre el formualario de edit para poder igualar los campos con las variables
            $('#form-edit').each(function () {

                // se igualan los campos del formualario con las variables
                this.action = this.action + '/' + data.id;
                this.elements.namedItem('nombre').value = name;
                this.elements.namedItem('genero').value = gender;

            });


        });
    });

    $("a[data-title=assignDelete]").click(function (){
        idDelete = this.id;
    });
    // se activa cuando se quiere editar algun usuario
    $("a[data-title=delete]").click(function () {

        var id = idDelete;

        $.ajax({
            url:this.baseURI + '/' + id,
            type: 'DELETE',
            success: function(data) {
                // Do something with the result
            }
        });
    });


    $("a[data-title=create]").click(function () {

        //var id = this.id;

        // obtiene los datos del usuario para editar
        $.get(this.baseURI + '/findAllArtist', function (data) {
                data = JSON.parse(data);
            // variables
            var name = data.nombre;
            var gender = data.genero;

            // recorre el formualario de edit para poder igualar los campos con las variables
            //$('#lista_artistas').append("<option value=\""+k+"\">"+v+"</option>");


            $.each(data, function(i,item){
            $('#lista_artistas').append(+i+" - "+data[i].nombre+" - "+data[i].genero+" - "+data[i].id);
        })


        });
    });

    /*$("#lista_artistas").click(function () {

        //var id = this.id;

        // obtiene los datos del usuario para editar
        $.get(this.baseURI + '/findAllArtist', function (data) {
                data = JSON.parse(data);
            // variables
            var name = data.nombre;
            var gender = data.genero;

            // recorre el formualario de edit para poder igualar los campos con las variables
            //$('#lista_artistas').append("<option value=\""+k+"\">"+v+"</option>");


            $.each(data, function(i,item){
            $('lista_artistass').append("<br>"+i+" - "+data[i].nombre+" - "+data[i].genero+" - "+data[i].id);
        })


        });
    });*/


});