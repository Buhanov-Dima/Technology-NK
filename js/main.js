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

/*
document.addEventListener('DOMContentLoaded', function () {
	
	if (window.innerWidth < 992) {
	 
	}

   	const burger = document.getElementById('burger');
	  const mobileMenu = document.getElementById('mobile-menu');

	  burger.addEventListener('click', () => {
		mobileMenu.classList.toggle('open');
		burger.classList.toggle('active');
	  });

	  // Поддержка подменю на мобилке — dropdown-menu и dropdown-menu-sub
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

  // Клик на первый уровень меню (десктоп)
  const desktopParents = document.querySelectorAll('.nav li.dropdown.has-submenu > a');
  desktopParents.forEach(link => {
    link.addEventListener('click', function (e) {
      const parent = this.parentElement;
      if (window.innerWidth >= 992) {
        e.preventDefault();
        document.querySelectorAll('.nav li.dropdown.has-submenu').forEach(item => {
          if (item !== parent) item.classList.remove('clicked');
        });
        parent.classList.toggle('clicked');

        // Ensure .show class behaves correctly
        const dropdown = parent.querySelector('.dropdown-menu');
        if (dropdown) {
          dropdown.classList.toggle('show');
        }
      }
    });
  });
});*/

document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('burger');
  const mobileMenu = document.getElementById('mobile-menu');

  if (window.innerWidth < 992) {
    burger.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
      burger.classList.toggle('active');
    });

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
