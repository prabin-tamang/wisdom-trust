


// sticky navigation

window.onscroll = function() {myFunction()};

let navbar = document.querySelector(".navigation-bar");
let sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}








// mobile hamburger open

const hamburgerIcon = document.querySelector('.mobile-nav');
const navMenu = document.querySelector('.main-navigation');

const overlay = document.querySelector('.overlay');
const body = document.querySelector('.overflow');

hamburgerIcon.addEventListener('click', () => {
    navMenu.style.transform = "translateX(0)";
    overlay.style.display = 'block';
    body.classList.add('hide-overflow');
});

overlay.addEventListener('click', ()=> {
    navMenu.style.transform = "translateX(-100vh)";
    overlay.style.display = "none";
    body.classList.remove('hide-overflow');
});




// carousel

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



let wisdomslideIndex = 0;
wisdomSlides();

function wisdomSlides() {
  let i;
  let wslides = document.getElementsByClassName("wisdomSlider");
  let wdots = document.getElementsByClassName("wdot");
  for (i = 0; i < wslides.length; i++) {
    wslides[i].style.display = "none";  
  }
  wisdomslideIndex++;
  if (wisdomslideIndex > wslides.length) {wisdomslideIndex = 1}    
  for (i = 0; i < wdots.length; i++) {
    wdots[i].className = wdots[i].className.replace(" wactive", "");
  }
  wslides[wisdomslideIndex-1].style.display = "block";  
  wdots[wisdomslideIndex-1].className += " wactive";
  setTimeout(wisdomSlides, 5000); 
}