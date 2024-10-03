$(document).ready(function () {
    $(".veen .rgstr-btn button").click(function () {
        $('.veen .wrapper').addClass('move');
        $('.body').css('background', 'linear-gradient(45deg, lightgray 25%, transparent 25%, transparent 75%, lightgray 75%, lightgray), linear-gradient(45deg, lightgray 25%, transparent 25%, transparent 75%, lightgray 75%, lightgray), linear-gradient(to bottom, rgb(230, 230, 230), lightgray)');
        $('.body').css('background-size', '10px 10px, 10px 10px, 10px 5px');
        $(".veen .login-btn button").removeClass('active');
        $(this).addClass('active');

    });
    $(".veen .login-btn button").click(function () {
        $('.veen .wrapper').removeClass('move');
        $('.body').css('background', 'linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), linear-gradient(to bottom, rgb(8, 8, 8), rgb(32, 32, 32))');
        $('.body').css('background-size', '10px 10px, 10px 10px, 10px 5px');
        $('.body').css('background-position', '0px 0px, 5px 5px, 0px 0px');
        $(".veen .rgstr-btn button").removeClass('active');
        $(this).addClass('active');
    });
});