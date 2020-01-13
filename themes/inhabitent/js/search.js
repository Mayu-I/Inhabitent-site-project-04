$(function () {
    $('.search-toggle').click(function () {
        $('.search-label').stop(true).animate({ width: 'toggle' }, 1);
    });
});