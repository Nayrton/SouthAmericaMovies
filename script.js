(function (document, window, $) {
    $(document).ready(function () {
        $('.teste').slick();
        $('.baners').slick({
            arrows:false,
            autoplay: true,
            autoplaySpeed: 4000,
            pauseOnFocus:false,
            dots:true
        });
    });
})(document, window, jQuery);


