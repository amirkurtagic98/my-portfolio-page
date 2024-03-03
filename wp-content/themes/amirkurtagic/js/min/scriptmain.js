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

jQuery(document).ready(function() {
    // Add smooth scrolling to all links
    jQuery("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top
            }, 800, function() {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});
