// onscroll navbar
const penutupNav = document.querySelector('.penutup');

const onScroll = () => {
    if (window.scrollY > 0) {
        penutupNav.classList.add('on-scroll-penutup');
    } else {
        penutupNav.classList.remove('on-scroll-penutup');
    }
}

window.addEventListener('scroll', onScroll)

// nav-mobile
const tombolBurger = document.querySelector('.burger-menu');
const iconBurger = document.querySelector('.burger-menu ion-icon');
const kotakNavMobile = document.querySelector('.nav-mobile');

const showNavMobile = () => {
    // Console.log('ok');
    kotakNavMobile.classList.toggle('show-nav-mobile');
    tombolBurger.classList.toggle('show-tombol-dropdown');
    if (iconBurger.name==='menu-outline'){ 
        iconBurger.name = 'close-outline';
    } else {
        iconBurger.name = 'menu-outline';
    }
}

const hideNavMobile = () => {
    kotakNavMobile.classList.remove('show-nav-mobile');
    tombolBurger.classList.remove('show-tombol-dropdown');
    iconBurger.name = 'menu-outline';
}

tombolBurger.addEventListener('click', showNavMobile);
section.addEventListener('click', hideNavMobile);

