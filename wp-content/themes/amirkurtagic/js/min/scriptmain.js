jQuery("#menuToggler").on("click", function () {
    jQuery("#mobileMenu").toggleClass("active");
});

jQuery(".landing-block__links .btn").on("hover", function () {
    jQuery(".landing-block__icon-1").addClass("d-none");
    jQuery(".landing-block__icon-2").removeClass("d-none");
});