$(document).ready(function() {
    $('.navbar-nav [data-toggle="tooltip"]').tooltip();
    $('.navbar-twitch-toggle').on('click', function(event) {
        event.preventDefault();
        $('.navbar-twitch').toggleClass('open');
    });

    $('.nav-style-toggle').on('click', function(event) {
        event.preventDefault();
        var $current = $('.nav-style-toggle.disabled');
        $(this).addClass('disabled');
        $current.removeClass('disabled');
        $('.navbar-twitch').removeClass('navbar-'+$current.data('type'));
        $('.navbar-twitch').addClass('navbar-'+$(this).data('type'));
    });
});
$("a[data-title=send]").click(function (){
    $.get(this.baseURI + "/colas/" + this.id , function (data) {

    });


});
if($('#authRoll').text() == "Administrator")
{
    $('li.Cliente').remove();
    $('li.Administrator').show();
    $('li.Dashboard').show();

}
else
{
    $('li.Administrator').remove();
    $('li.Cliente').show();
    $('li.Dashboard').show();
}

function crearArticulo()
{
    $('.modal')
        .modal('show')
    ;

}
