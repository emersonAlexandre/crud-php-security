/**
 * @name função que seta algumas mascáras para serem utilizadas nos forms.
 *
 * @description Configura mascara de cpf, números, cep e etc para serem aplicadas em inputs de acordo com a classe css.
 *
 *
 * @author Rafael Feitosa
 **/
$(document).ready(function() {
    $('.js-cpf').mask('000.000.000-00');
    $('.js-number-phone').mask('(00) 0000-0000');
    $('.js-number-cellPhone').mask('(00) 00000-0000');
    $('.js-number-phoneandcell').mask('(00) 000000000');
    $('.js-cpnj').mask('00.000.000/0000-00');
    $('.js-number').mask('0#');
    $('.js-hour').mask('00:00');
    $('.js-date-pt-br').mask('00/00/0000');
    $('.js-cep').mask('00000-000');
    $('.js-moeda').mask('000.000.000.000.000,00', {
        reverse: true
    });
    $('.js-decimal').mask('000.000.000.000.000.00', {
        reverse: true
    });

});
