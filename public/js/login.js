$(document).ready(function () {


    // se activa cuando se quiere editar algun usuario
    $("a[data-title=login]").click(function () {
        if($('#register').hasClass('oculto'))
        {
            $('#btnLogin').toggle();
            $('#login').toggle();
            $('#login').removeClass('oculto');

        }
        else
        {
            $('#btnLogin').toggle();
            $('#btnRegister').toggle();
            $('#register').toggle();
            $('#login').toggle();
            $('#register').addClass('oculto');
            $('#login').removeClass('oculto');


        }



    });

    $("a[data-title=register]").click(function () {

        if($('#login').hasClass('oculto'))
        {
            $('#btnRegister').toggle();
            $('#register').toggle();
            $('#register').removeClass('oculto');
        }
        else
        {
            $('#btnRegister').toggle();
            $('#btnLogin').toggle();
            $('#login').toggle();
            $('#register').toggle();
            $('#login').addClass('oculto');
            $('#register').removeClass('oculto');


        }
    });

    $(function(){

        // Checking for CSS 3D transformation support
        $.support.css3d = supportsCSS3D();

        var formContainer = $('#formContainer');

        // Listening for clicks on the ribbon links
        $('.flipLink').click(function(e){

            // Flipping the forms
            formContainer.toggleClass('flipped');

            // If there is no CSS3 3D support, simply
            // hide the login form (exposing the recover one)
            if(!$.support.css3d){
                $('#login').toggle();
            }
            e.preventDefault();
        });

        formContainer.find('form').submit(function(e){
            // Preventing form submissions. If you implement
            // a backend, you might want to remove this code
            e.preventDefault();
        });


        // A helper function that checks for the
        // support of the 3D CSS3 transformations.
        function supportsCSS3D() {
            var props = [
                'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
            ], testDom = document.createElement('a');

            for(var i=0; i<props.length; i++){
                if(props[i] in testDom.style){
                    return true;
                }
            }

            return false;
        }
    });


});