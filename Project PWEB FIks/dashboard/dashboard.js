window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 5);
})
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
let loginForm = document.querySelector('.header .login-form');
let loginBox = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');


menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
    loginBox.classList.remove('active');
}


document.querySelector('#login-btn').onclick = () =>{
    menu.classList.remove('fa-times');
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
    loginBox.classList.add('active');
}

document.querySelector('#form-close').onclick = () =>{
    loginForm.classList.remove('active');
    loginBox.classList.remove('active');
}

var swiper = new Swiper(".review-slider", {
    loop:true, 
    grabCursor:true,
    spaceBetween: 20,
    autoplay: {
        delay: 3500,
    },
    breakpoints: {
        0: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
    },
});
