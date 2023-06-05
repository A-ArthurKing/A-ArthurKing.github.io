const menuHamburger = document.querySelector(".menu-hamburger")
const navLinks = document.querySelector(".nav-links")

menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu');
    if (menuHamburger.classList.contains("fa-bars")) {
        menuHamburger.classList.replace("fa-bars", "fa-times");
      } else if (menuHamburger.classList.contains("fa-times")) {
        menuHamburger.classList.replace("fa-times", "fa-bars");
      }
})

  
