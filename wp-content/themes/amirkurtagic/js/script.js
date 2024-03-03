jQuery("#menuToggler").on("click", function () {
    jQuery("html").scrollTop(0);
    jQuery("#mobileMenu").toggleClass("active");
});

jQuery(".landing-block__links .btn").hover(
    function () {
        jQuery(".landing-block__icon-1").addClass("d-none");
        jQuery(".landing-block__icon-2").removeClass("d-none");
    },
    function () {
        jQuery(".landing-block__icon-1").removeClass("d-none");
        jQuery(".landing-block__icon-2").addClass("d-none");
    }
);

jQuery(".about-block__links .btn").hover(
    function () {
        jQuery(".about-block__icon-1").addClass("d-none");
        jQuery(".about-block__icon-2").removeClass("d-none");
    },
    function () {
        jQuery(".about-block__icon-1").removeClass("d-none");
        jQuery(".about-block__icon-2").addClass("d-none");
    }
);

jQuery(document).ready(function() {
    jQuery(".topbar__nav-link a").on('click', function(event) {
        jQuery("#mobileMenu").toggleClass("active");
        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top
            }, 0, function() {
            });
        }
    });
});

jQuery(document).ready(function () {
    var header = jQuery(".site-header");
    var sticky = header.offset().top;

    jQuery(window).on("scroll", function () {
        if (jQuery(window).scrollTop() > sticky) {
            header.addClass("sticky");
        } else {
            header.removeClass("sticky");
        }
    });
});
