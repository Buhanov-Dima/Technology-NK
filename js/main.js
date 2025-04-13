$(document).ready(function () {
    
	$('.owl-start').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true
    })
    
    $('.production-carousel').owlCarousel({
        loop: true,
        margin: 10,
        items: 3,
        autoplay: false,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }

    })

    $('.partners-carousel').owlCarousel({
        loop: true,
        margin: 10,
        items: 5,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        dots: false,
        nav: false,
        responsiveClass: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }

    })
	
});


if (window.innerWidth < 992) {
  // Удалить data-bs-toggle у ссылок
  document.querySelectorAll('.mobile-nav .dropdown-toggle').forEach(el => {
    el.removeAttribute('data-bs-toggle');
  });

  // Удалить все style у вложенных подменю
  document.querySelectorAll('.mobile-nav .dropdown-menu-sub').forEach(el => {
    el.removeAttribute('style');
  });
}


// document.addEventListener('DOMContentLoaded', function () {
//   const burger = document.getElementById('burger');
//   const mobileMenu = document.getElementById('mobile-menu');
//   const closeBtn = document.getElementById('close-menu');

//   if (window.innerWidth < 992) {
//     // Удалить data-bs-toggle у ссылок
//     document.querySelectorAll('.mobile-nav .dropdown-toggle').forEach(el => {
//       el.removeAttribute('data-bs-toggle');
//     });

//     // Удалить все style у вложенных подменю
//     document.querySelectorAll('.mobile-nav .dropdown-menu-sub').forEach(el => {
//       el.removeAttribute('style');
//     });

//     burger?.addEventListener('click', () => {
//       mobileMenu.classList.toggle('open');
//       burger.classList.toggle('active');
//     });

//     closeBtn?.addEventListener('click', () => {
//       mobileMenu.classList.remove('open');
//       burger.classList.remove('active');
//     });

//     const submenuParents = document.querySelectorAll('.mobile-nav .menu-item-has-children > a');
//     submenuParents.forEach(link => {
//       link.addEventListener('click', function (e) {
//         const parent = this.parentElement;
//         const submenu = parent.querySelector('.dropdown-menu, .dropdown-menu-sub');
//         if (submenu) {
//           e.preventDefault();
//           parent.classList.toggle('active');
//         }
//       });
//     });

//     const overlay = document.getElementById('menu-overlay');

//     overlay?.addEventListener('click', () => {
//       mobileMenu.classList.remove('open');
//       burger.classList.remove('active');
//     });

//   }
// });

document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('burger');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeBtn = document.getElementById('close-menu');
  const overlay = document.getElementById('menu-overlay');

  function openMenu() {
    mobileMenu.classList.add('open');
    burger.classList.add('active');
    document.body.classList.add('no-scroll');
  }

  function closeMenu() {
    mobileMenu.classList.remove('open');
    burger.classList.remove('active');
    document.body.classList.remove('no-scroll');
  }

  if (window.innerWidth < 992) {
    // Удалить data-bs-toggle у ссылок
    document.querySelectorAll('.mobile-nav .dropdown-toggle').forEach(el => {
      el.removeAttribute('data-bs-toggle');
    });

    // Удалить все style у вложенных подменю
    document.querySelectorAll('.mobile-nav .dropdown-menu-sub').forEach(el => {
      el.removeAttribute('style');
    });

    burger?.addEventListener('click', () => {
      if (mobileMenu.classList.contains('open')) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    closeBtn?.addEventListener('click', closeMenu);
    overlay?.addEventListener('click', closeMenu);

    const submenuParents = document.querySelectorAll('.mobile-nav .menu-item-has-children > a');
    submenuParents.forEach(link => {
      link.addEventListener('click', function (e) {
        const parent = this.parentElement;
        const submenu = parent.querySelector('.dropdown-menu, .dropdown-menu-sub');
        if (submenu) {
          e.preventDefault();
          parent.classList.toggle('active');
        }
      });
    });
  }
});
