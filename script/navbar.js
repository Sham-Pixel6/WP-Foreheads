// Description: Navbar script for P6Foreheads
function toggleNavbar() {
    const navbarCollapse = document.querySelector('.navbar-collapse');
    navbarCollapse.classList.toggle('show');
}


// Descritpion: Contact button text change on mobile
document.addEventListener("DOMContentLoaded", function () {
    function updateButtonText() {
        let button = document.querySelector(".contact-btn button");
        if (window.innerWidth <= 425) {
            button.textContent = "Contact Us";
        } else {
            button.textContent = "Enquire Our Fleet Services Now";
        }
    }
    updateButtonText();
    window.addEventListener("resize", updateButtonText);
});

