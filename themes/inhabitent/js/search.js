$(function () {
    $('.search-toggle').click(function () {
        $('.search-label').stop(true).animate({ width: 'toggle' }, 'slow');
        $('.search-field').focus();
    });
    $('.search-field').blur(function() {
    if ($(this).val() === '') {
            $('.search-label').stop(true).animate({ width: 'toggle' }, 'slow');
     }
     });
});