console.log(document.cookie)
if ($('.cookie')[0]) {
    $('.cookie__agree').on('click', function(e){
        e.preventDefault();
        $('.cookie').hide();
        document.cookie = 'agree = yes; path=/';
    })
}