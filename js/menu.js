let menuBtn = document.getElementById('menuBtn');
let megaMenu = document.getElementById('megaMenu');
let header_mobile = document.getElementById('header');
let menuBtnFermeture = document.getElementById('menuBtnFermeture')

menuBtn.addEventListener('click', () => {
    console.log('coucou');
    menuBtn.classList.remove('active-mobile');
    menuBtn.classList.add('inactive-mobile');
    megaMenu.classList.remove('inactive-mobile');
    megaMenu.classList.add('active-mobile');
    header_mobile.classList.add('header-mobile');
    menuBtnFermeture.classList.add('active-mobile');
    menuBtnFermeture.classList.remove('inactive-mobile');
});

menuBtnFermeture.addEventListener('click', () => {
    console.log('Fermeture du menu');
    menuBtn.classList.remove('inactive-mobile');
    menuBtn.classList.add('active-mobile');
    megaMenu.classList.remove('active-mobile');
    megaMenu.classList.add('inactive-mobile');
    header_mobile.classList.remove('header-mobile');
    menuBtnFermeture.classList.add('inactive-mobile');
    menuBtnFermeture.classList.remove('active-mobile');
});


function example() {
    el = document.getElementById("example");
    el.style.visibility = el.style.visibility == "visible" ? "hidden" : "visible";
    }