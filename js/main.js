jQuery(document).ready(function ($) {
    var mainMenu = $('#mainMenu');
    var mobileMenuButton = $('#mobileMenuButton');

    mobileMenuButton.on('click', function (e) {
        e.preventDefault();
        mainMenu.slideToggle();
    });
});