        $(document).ready(function() {
    $('.toggle-nav').click(function(e) {
         $('.nav_bar ul').removeClass('active');
        e.preventDefault();
    });
    $('.menu_icn').click(function(e) {
         $('.nav_bar ul').addClass('active');
        e.preventDefault();
    });       
});