// responsive navbar
const search = document.querySelector("#search");
const searchMenu = document.querySelector(".search-collapse");

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector(".navbar-collapse");

search.addEventListener("click", mobileSearchMenu);
hamburger.addEventListener("click", mobileNavMenu);

function mobileNavMenu() {
     hamburger.classList.toggle("active");
     navMenu.classList.toggle("active");
}

function mobileSearchMenu(){
     search.classList.toggle("active");
     searchMenu.classList.toggle("active");
}