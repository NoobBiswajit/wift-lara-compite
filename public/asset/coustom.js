// dropdown code
$(document).ready(function () {
    $('.dropdown-toggle').dropdown();
});

// dropdown code end



var swiper = new Swiper(".heroSwiper", {
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

// ======testslider=========

var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
});

// ============team-slider==========

var swiper = new Swiper(".teamSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});
// ========Blog-swiper===========

var swiper = new Swiper(".blogSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".compliteSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});
var swiper = new Swiper(".runningSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});
window.onscroll = () => {
    const nav = document.querySelector('#navbar');
    if (this.scrollY <= 0) nav.className = 'nav_area'; else nav.className = 'scroll';
};
// ========Menu Drop down=========
$(document).ready(function () {
    $("button").click(function () {
        $("#dropdwon").fadeToggle("main");
    });
});

// ===================Password========
$(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
$(".contoggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

$(function () {
    var current = location.pathname;
    $(".navbar-nav li .nav-link").each(function () {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr("href").indexOf(current) !== -1) {
            $this.addClass("active");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Get the current page URL
    var currentUrl = window.location.href;

    // Define the IDs of the menu items
    var homeLink = document.getElementById("home-link");
    var aboutLink = document.getElementById("about-link");
    var careerLink = document.getElementById("career-link");
    var portfolioLink = document.getElementById("portfolio-link");
    var blogLink = document.getElementById("blog-link");
    var servicesLink = document.getElementById("services-link");
    var contactLink = document.getElementById("contact-link");
    // Add IDs for other menu items as needed

    // Check if the current URL matches the link's href attribute
    if (currentUrl === homeLink.href) {
        homeLink.classList.add("active");
    } else if (currentUrl === aboutLink.href) {
        aboutLink.classList.add("active");
    } else if (currentUrl === contactLink.href) {
        contactLink.classList.add("active");
    } else if (currentUrl === careerLink.href) {
        careerLink.classList.add("active");
    } else if (currentUrl === blogLink.href) {
        blogLink.classList.add("active");
    } else if (currentUrl === portfolioLink.href) {
        portfolioLink.classList.add("active");
    } else if (currentUrl === servicesLink.href) {
        servicesLink.classList.add("active");
    }
    // Add similar checks for other menu items
});

document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');


    contactForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form data
        const formData = new FormData(contactForm);

        // Convert FormData to a JSON object
        const formDataJSON = {};
        formData.forEach((value, key) => {
            formDataJSON[key] = value;
        });

        // Send a POST request to your API endpoint
        axios.post('/api/contact_us', formDataJSON)
            .then(function (response) {
                // Handle a successful API response here
                console.log('API response:', response.data);
                // Display the success message
                successMessage.style.display = 'block';
                // Optionally, reset the form
                contactForm.reset();
            })
            .catch(function (error) {
                // Handle API request errors here
                console.error('API error:', error);
            });
    });
})
