'use strict';

$('.services__menu-select').on('click', function(){
    if ($(this).parent().find('.services__menu').css('display') === 'none') {
        $(this).parent().find('.services__menu').css('display', 'flex');
    } else {
        $(this).parent().find('.services__menu').hide();
    }
})