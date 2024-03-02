jQuery("#menuToggler").on("click", function () {
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
