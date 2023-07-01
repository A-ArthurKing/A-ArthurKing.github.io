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


const options = {
  root:null,
  rootMargin: "0px",
  threshold: .1,
};
const handelIntersect = function () {
  console.log("handelIntersect");
}
let observer = new IntersectionObserver(handelIntersect, options);


