$(document).ready(function () {
 
    $('.production-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false
          }
        }
    })

    $('.partners-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: false,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 5,
            nav: true,
            loop: false
          }
        }
    })

    $('.product-carousel').owlCarousel({
      loop: true,
      margin: 0,
      autoplay: false,
      nav: true,
      dots: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 5,
          nav: true,
          loop: false
        }
      }
    });

     // Принудительное обновление после полной загрузки
    $(window).on('load', function () {
      $('.production-carousel, .partners-carousel, .product-carousel').trigger('refresh.owl.carousel');
    });
    
});


document.addEventListener('DOMContentLoaded', function () {
  //мобильное меню
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
    

  }

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

  //маска для телефона
  const phoneInput = document.querySelector('.phone-mask');

  if (phoneInput && typeof IMask !== 'undefined') {
    IMask(phoneInput, {
      mask: '+{7} (000) 000-00-00'
    });
  }

  
  const form = document.getElementById('contactModal');
  const emailInput = document.getElementById('email');

  if (form) {
    form.addEventListener('submit', function (e) {
      const email = emailInput.value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      // 👉 если НЕ пусто, тогда проверяем
      if (email !== '' && !emailRegex.test(email)) {
        e.preventDefault();
        alert('Пожалуйста, введите корректный email.');
        emailInput.classList.add('is-invalid');
        return;
      } else {
        emailInput.classList.remove('is-invalid');
      }
    });
  }
});