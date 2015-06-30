// se activa cuando el documento este cargado
var idDelete = null;
$(document).ready(function () {


    // se activa cuando se quiere editar algun usuario
    $("a[data-title=edit]").click(function () {

        var id = this.id;

        // obtiene los datos del usuario para editar
        $.get(this.baseURI + '/' + id + '/edit', function (data) {
            data = JSON.parse(data);
            // variables
            var name = data.name;


            // recorre el formualario de edit para poder igualar los campos con las variables
            $('#form-editSongs').each(function () {

                // se igualan los campos del formualario con las variables
                this.action = this.action + '/' + data.id;
                this.elements.namedItem('name').value = name;

            });


        });
    });



    Dropzone.options.myDropzone = {

        // Prevents Dropzone from uploading dropped files immediately
        autoProcessQueue: false,
        uploadMultiple: true,
        maxFilesize: 100,
        acceotedFiles: 'image/*,application/pdf,.psd,.mp3,.mp4',
        maxFiles: 1,


        init: function () {
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this; // closure

            myDropzone.processQueue();
            submitButton.addEventListener("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });
            this.on("complete", function(file){
                setTimeout("location.href='http://localhost:8000/canciones'", 1000);
            });
        }
    }

    $("a[data-title=assignDelete]").click(function (){
        idDelete = this.id;
    });
    // se activa cuando se quiere editar algun usuario
    $("a[data-title=delete]").click(function () {

        var id = idDelete;

        $('#form'+id).submit();
    });
});