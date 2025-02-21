// Description: Navbar script for P6Foreheads
function toggleNavbar() {
    const navbarCollapse = document.querySelector('.navbar-collapse');
    navbarCollapse.classList.toggle('show');
}

// Description: Contact button text change on mobile
document.addEventListener("DOMContentLoaded", function () {
    function updateButtonText() {
        let button = document.querySelector(".contact-btn button");
        if (button) {
            button.textContent = (window.innerWidth <= 425) ? "Contact Us" : "Enquire Our Fleet Services Now";
        }
    }
    updateButtonText();
    window.addEventListener("resize", updateButtonText);
});

// Resizing navbar on scroll
document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});

// Hiding navbar when footer is visible
document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.querySelector(".navbar");
    let footer = document.querySelector(".footer-container");

    if (navbar && footer) {
        let observer = new IntersectionObserver(
            function (entries) {
                if (entries[0].isIntersecting) {
                    navbar.classList.add("hidden");
                } else {
                    navbar.classList.remove("hidden");
                }
            },
            { threshold: 0.1 }
        );

        observer.observe(footer);
    }
});
