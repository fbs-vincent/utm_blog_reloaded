const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});

const btnBurger = document.querySelector('.burger-menu');
const topMenu = document.querySelector('.menu-top-bar-container ul');
btnBurger.addEventListener('click', () => {
  console.log(topMenu);
  topMenu.classList.toggle('menu-open');
  btnBurger.classList.toggle('burger-close');
});

function closeMenu() {
  if (window.innerWidth > 768) {
    topMenu.classList.remove('menu-open');
    btnBurger.classList.remove('burger-close');
    console.log('clicked');
  }
}

closeMenu();
