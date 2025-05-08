$(document).ready(function() {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveRefreshRate: 100,
        navText: ["<span class='owl-prev'><i class='bi bi-arrow-left'></i></span>", "<span class='owl-next'><i class='bi bi-arrow-right'></i></span>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    // On slide change, remove and add active class to blur effect
    owl.on('changed.owl.carousel', function(event) {
        // Remove active class from all items
        $('.owl-item').removeClass('active-slide');

        // Add active class to the current item
        $('.owl-item.active').addClass('active-slide');
    });

    // Initially set the first slide as active
    $('.owl-item.active').first().addClass('active-slide');
});

var acc = document.getElementsByClassName("accordion");

    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            // Toggle active state for the accordion
            this.classList.toggle("active");

            // Find the icon within the clicked accordion button
            var arrowIcon = this.querySelector('.accordion-icon');

            // Ensure the icon was found before attempting to change classes
            if (arrowIcon) {
                // Toggle the icon between right and down
                if (arrowIcon.classList.contains('fa-chevron-right')) {
                    arrowIcon.classList.remove('fa-chevron-right');
                    arrowIcon.classList.add('fa-chevron-down');
                } else {
                    arrowIcon.classList.remove('fa-chevron-down');
                    arrowIcon.classList.add('fa-chevron-right');
                }
            }

            // Toggle the visibility of the associated panel
            var pannel = this.nextElementSibling;
            if (pannel.style.display === "block") {
                pannel.style.display = "none";
            } else {
                pannel.style.display = "block";
            }
        });
    }