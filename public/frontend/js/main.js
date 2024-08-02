// nav links
(() => {
  const menu = document.querySelector(".hamburger-menu");
  const navLinks = document.querySelector(".nav-links");
  const bgBefore = document.querySelector(".bg-before");

  [menu, bgBefore].forEach((e) =>
    e.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    })
  );
})();

// start header sliders
(() => {
  let optionSlider = {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
  };

  let sliderText = new Swiper(".header-slider-text .slider", {
    ...optionSlider,
    allowTouchMove: false,
    autoplay: false,
    effect: "fade",
    parallax: true,
  });

  let sliderBg = new Swiper(".header-slider-bg .slider", {
    ...optionSlider,
    allowTouchMove: false,
    autoplay: false,
    effect: "fade",
  });

  let sliderimages = new Swiper(".header-slider-img .slider", {
    ...optionSlider,
    pagination: {
      el: ".header-slider-img .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      767: {
        slidesPerView: 1.5,
      },
      992: {
        slidesPerView: 2.5,
      },
    },
  });

  sliderimages.on("slideChange", function (e) {
    sliderBg.slideTo(e.realIndex + 1);
    sliderText.slideTo(e.realIndex + 1);
  });
})();

// start destinations sliders
(() => {
  let optionSlider = {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
  };

  let sliderText = new Swiper(".destinations-slider-text .slider", {
    ...optionSlider,
    allowTouchMove: false,
    autoplay: false,
    effect: "fade",
    parallax: true,
  });

  let sliderimages = new Swiper(".destinations-slider-img .slider", {
    ...optionSlider,
    navigation: {
      nextEl: ".destinations-slider-img .swiper-button-next",
      prevEl: ".destinations-slider-img .swiper-button-prev",
    },
    breakpoints: {
      767: {
        slidesPerView: 1.5,
      },
      992: {
        slidesPerView: 2.5,
      },
    },
  });

  sliderimages.on("slideChange", function (e) {
    sliderText.slideTo(e.realIndex + 1);
  });
})();

// start gallery sliders
(() => {
  let optionSlider = {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
  };

  let sliderText = new Swiper(".gallery-slider-bg .slider", {
    ...optionSlider,
    allowTouchMove: false,
    autoplay: false,
    effect: "fade",
    parallax: true,
  });

  let sliderimages = new Swiper(".gallery-slider-img .slider", {
    ...optionSlider,
    navigation: {
      nextEl: ".gallery-slider-img .swiper-button-next",
      prevEl: ".gallery-slider-img .swiper-button-prev",
    },
    breakpoints: {
      767: {
        slidesPerView: 1.5,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });

  sliderimages.on("slideChange", function (e) {
    sliderText.slideTo(e.realIndex + 1);
  });
})();

// start blogs slider
(() => {
  let optionSlider = {
    slidesPerView: 1.5,
    spaceBetween: 20,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      nextEl: ".blogs-slider .swiper-button-next",
      prevEl: ".blogs-slider .swiper-button-prev",
    },
    breakpoints: {
      767: {
        slidesPerView: 2.5,
      },
      992: {
        slidesPerView: 3.5,
      },
    },
  };

  new Swiper(".blogs-slider .slider", optionSlider);
})();

// start partners slider
(() => {
  let optionSlider = {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    speed: 1000,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      nextEl: ".partners-slider .swiper-button-next",
      prevEl: ".partners-slider .swiper-button-prev",
    },
    breakpoints: {
      500: {
        slidesPerView: 2.5,
      },
      767: {
        slidesPerView: 3.5,
      },
      992: {
        slidesPerView: 5.5,
      },
    },
  };

  new Swiper(".partners-slider .slider", optionSlider);
})();
