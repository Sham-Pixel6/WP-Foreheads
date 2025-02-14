var reviewIndex = 0;
var slides = document.getElementsByClassName("review-slide");
console.log(slides);
var indicators = document.getElementsByClassName("indicator");
var slideshowInterval;
var isSlideshowRunning = true; 

function showSlides() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (var i = 0; i < indicators.length; i++) {
    indicators[i].classList.remove("active");
  }

  slides[reviewIndex].style.display = "flex";
  indicators[reviewIndex].classList.add("active");

  reviewIndex++;

  if (reviewIndex >= slides.length) {
    reviewIndex = 0;
  }
}

function startSlideshow() {
  slideshowInterval = setInterval(showSlides, 3000);
}

function stopSlideshow() {
  clearInterval(slideshowInterval);
}
  
function toggleSlideshow() {
  if (isSlideshowRunning) {
    stopSlideshow();
    startSlideshow();
  }
  isSlideshowRunning = !isSlideshowRunning;
}

startSlideshow();

for (var i = 0; i < slides.length; i++) {
  slides[i].addEventListener("click", toggleSlideshow);
}

showSlides();
