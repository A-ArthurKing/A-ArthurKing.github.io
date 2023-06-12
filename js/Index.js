const menuHamburger = document.querySelector(".menu-hamburger");
const navLinks = document.querySelector(".nav-links");

menuHamburger.addEventListener("click", () => {
  navLinks.classList.toggle("mobile-menu");
  if (menuHamburger.classList.contains("fa-bars")) {
    menuHamburger.classList.replace("fa-bars", "fa-times");
  } else if (menuHamburger.classList.contains("fa-times")) {
    menuHamburger.classList.replace("fa-times", "fa-bars");
  }
});


const navBar = document.querySelector(".nav-bar");

window.addEventListener("scroll", () => {
  if (window.scrollY > 0) {
    navBar.classList.add("scroll");
  } else {
    navBar.classList.remove("scroll");
  }
});


var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  autoplay: {
    delay: 5000,
  },
});
