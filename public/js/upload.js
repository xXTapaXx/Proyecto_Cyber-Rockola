$(document).ready(function () {

    /*$("#dropzone").dropzone({
        url: "canciones/upload",
        maxFileSize: 1000,
        dictResponseError: "Ha ocurrido un error en el server",
        acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
        removedfile: function (file, serverFileName) {
            var name = file.name;
            $.ajax({
                type: "POST",
                url: "canciones/",
                data: "filename=" + name,
                success: function (data) {
                    var json = JSON.parse(data);
                    if (json.res == true) {
                        var element;
                        (element = file.previewElement) != null ?
                            element.parentNode.removeChild(file.previewElement) :
                            false;

                    }
                }
            });
        }
    });*/

    Dropzone.options.myDropzone = {

        // Prevents Dropzone from uploading dropped files immediately
        autoProcessQueue: true,
        uploadMultiple: true,
        maxFilesize: 100,
        maxFiles: 5,
        acceotedFiles: 'image/*,application/pdf,.psd,.mp3,.mp4',

        init: function() {

            myDropzone = this; // closure

            myDropzone.processQueue();

            // You might want to show the submit button only when
            // files are dropped here:
            this.on("addedfile", function() {
                // Show submit button here and/or inform user to click it.
            });

        }
    };
});