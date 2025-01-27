document.addEventListener('click', menuDisplay);

const burgerIcon = document.querySelector('#burgerIcon');
const menuBurger = document.querySelector('#menuBurger');
const closeIcon = document.querySelector('#closeIcon');
const searchBar = document.querySelector('#searchBar');
const slideFilters = document.querySelector('#slideFilters');


function menuDisplay(event) {
    if (burgerIcon.contains(event.target)) {

        menuBurger.classList.toggle('hidden');
        menuBurger.classList.toggle('flex');
        searchBar.classList.toggle('[transform:translateX(30%)]');

    } else if (closeIcon.contains(event.target)) {

        menuBurger.classList.toggle('hidden');
        menuBurger.classList.toggle('flex');
        searchBar.classList.toggle('[transform:translateX(30%)]');
    }

};


