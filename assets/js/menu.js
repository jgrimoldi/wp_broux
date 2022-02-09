let header = document.querySelector('.header');
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar__links');
let navbarSocial = document.querySelector('.navbar__social');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    navbarSocial.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    navbarSocial.classList.remove('active')
}

window.onscroll = () => {
    header.classList.add('scroll')
}