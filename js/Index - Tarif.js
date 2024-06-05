/*!
=================================================================================================================================
     *Gestion du changement de style de la barre de navigation lors du défilement
=================================================================================================================================
*/
window.addEventListener("scroll", function () {
  var navbar = document.getElementById("navbar");
  var navLinks = document.querySelectorAll(".links a");
  var logoLink = document.querySelector("#logo a");
  var loginBtn = document.querySelector(".login-btn");
  var scrolled = window.scrollY > 3; // 3mm de défilement

  if (scrolled) {
    navbar.classList.add("scrolled");
    navLinks.forEach(function (link) {
      link.classList.add("scrolled");
    });
    logoLink.classList.add("scrolled"); // Ajout de la classe pour le lien du logo
    loginBtn.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
    navLinks.forEach(function (link) {
      link.classList.remove("scrolled");
    });
    logoLink.classList.remove("scrolled"); // Suppression de la classe pour le lien du logo
    loginBtn.classList.remove("scrolled");
  }
});
/*!
=================================================================================================================================
     *Carousel promotions
=================================================================================================================================
*/
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);

/*!
=================================================================================================================================
     *Insertion des soins
=================================================================================================================================
*/
let zoneAffichageSoins = document.querySelector(".listsoins");
let listeMassage = document.querySelector("#massages");
let listSoins = document.querySelector("#soins");
let listMasques = document.querySelector("#masques");
let lisEpilation= document.querySelector("#epilation");
let lisGommages= document.querySelector("#gommages");
let lisvisage= document.querySelector("#visages");

let btnMassages = document.querySelector("#btn-Massages");
let btnEpilations = document.querySelector("#btn-Épilations");
let btnSoins = document.querySelector("#btn-Soins");
let btnGommages = document.querySelector("#btn-Gommages");
let btnMasques = document.querySelector("#btn-Masques");
let btnVisages = document.querySelector("#btn-Visage");




function affichageMassages() {
  zoneAffichageSoins.innerHTML = '';
  zoneAffichageSoins.appendChild(listeMassage);
  listeMassage.style.display = "grid";
  btnMassages.style.backgroundColor = "#f9e3d2";
}

document.addEventListener('DOMContentLoaded', affichageMassages);



btnMassages.addEventListener('click', function() {
    zoneAffichageSoins.innerHTML = '';
    zoneAffichageSoins.appendChild(listeMassage);
    listeMassage.style.display = "grid";

    btnMassages.style.backgroundColor = "#f9e3d2";
    btnVisages.style.backgroundColor = "white";
    btnMasques.style.backgroundColor = "white";
    btnGommages.style.backgroundColor = "white";
    btnEpilations.style.backgroundColor = "white";
    btnSoins.style.backgroundColor = "white";
});

btnSoins.addEventListener('click', function() {
  zoneAffichageSoins.innerHTML = '';
  zoneAffichageSoins.appendChild(listSoins);
  listSoins.style.display = "grid";
  listeMassage.style.display = "none";

  btnMassages.style.backgroundColor = "white";
  btnVisages.style.backgroundColor = "white";
  btnMasques.style.backgroundColor = "white";
  btnGommages.style.backgroundColor = "white";
  btnEpilations.style.backgroundColor = "white";
  btnSoins.style.backgroundColor = "#f9e3d2";
});

btnMasques.addEventListener('click', function() {
  zoneAffichageSoins.innerHTML = '';
  zoneAffichageSoins.appendChild(listMasques);
  listMasques.style.display = "grid";
  listeMassage.style.display = "none";

  btnMassages.style.backgroundColor = "white";
  btnVisages.style.backgroundColor = "white";
  btnMasques.style.backgroundColor = "#f9e3d2";
  btnGommages.style.backgroundColor = "white";
  btnEpilations.style.backgroundColor = "white";
  btnSoins.style.backgroundColor = "white";
});

btnEpilations.addEventListener('click', function() {
  zoneAffichageSoins.innerHTML = '';
  zoneAffichageSoins.appendChild(lisEpilation);
  lisEpilation.style.display = "grid";
  listeMassage.style.display = "none";

  btnMassages.style.backgroundColor = "white";
  btnVisages.style.backgroundColor = "white";
  btnMasques.style.backgroundColor = "white";
  btnGommages.style.backgroundColor = "white";
  btnEpilations.style.backgroundColor = "#f9e3d2";
  btnSoins.style.backgroundColor = "white";
});

btnGommages.addEventListener('click', function() {
  zoneAffichageSoins.innerHTML = '';
  zoneAffichageSoins.appendChild(lisGommages);
  lisGommages.style.display = "grid";
  listeMassage.style.display = "none";
  btnMassages.style.backgroundColor = "white";
  btnVisages.style.backgroundColor = "white";
  btnMasques.style.backgroundColor = "white";
  btnGommages.style.backgroundColor = "#f9e3d2";
  btnEpilations.style.backgroundColor = "white";
  btnSoins.style.backgroundColor = "white";
});

btnVisages.addEventListener('click', function() {
  zoneAffichageSoins.innerHTML = '';
  zoneAffichageSoins.appendChild(lisvisage);
  lisvisage.style.display = "grid";
  listeMassage.style.display = "none";
  btnMassages.style.backgroundColor = "white";
  btnVisages.style.backgroundColor ="#f9e3d2";
  btnMasques.style.backgroundColor = "white";
  btnGommages.style.backgroundColor = "white";
  btnEpilations.style.backgroundColor = "white";
  btnSoins.style.backgroundColor = "white";
});
/*!
=================================================================================================================================
     *Responsive Nav Bar
=================================================================================================================================
*/
const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");

// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
  navbarMenu.classList.toggle("show-menu");
});

// Hide mobile menu
hideMenuBtn.addEventListener("click", () => hamburgerBtn.click());



/*!
=================================================================================================================================
     *Affichage du texte en plus dans les paragraphes
=================================================================================================================================
*/
document.addEventListener('DOMContentLoaded', function() {
  const toggleButton = document.getElementById('toggle-button');
  const textElement = document.getElementById('text');

  toggleButton.addEventListener('click', function() {
      console.log('Button clicked');
      textElement.classList.toggle('expanded');
      console.log('Text element classes:', textElement.classList);
      if (textElement.classList.contains('expanded')) {
          toggleButton.textContent = 'Afficher moins';
      } else {
          toggleButton.textContent = 'Afficher plus';
      }
  });
});

