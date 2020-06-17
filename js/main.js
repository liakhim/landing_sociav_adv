

function cleanModal() {
    $('.modal').removeClass('modal-show')
}

$('#burger').on('click',function(){
    $('#nav').toggleClass('show-nav');
});
$('.overlay').on('click',function(){
    cleanModal();
});
$('.call-register').on('click',function(){
    if ($('input[name=first-screen-email]').val().length > 0) {
        $('input[name=email]').val($('input[name=first-screen-email]').val())
    }
    $('.modal').removeClass('modal-show')
    $('.modal-registration').toggleClass('modal-show');
});

$('.call-sign').on('click',function(){
    $('.modal').removeClass('modal-show')
    $('.modal-sign').toggleClass('modal-show');
});