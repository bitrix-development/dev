new Swiper('.hero-slider', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: '.hero-next-btn',
    prevEl: '.hero-prev-btn',
  }
});

new Swiper('.main-comment-slider', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: '.comment-next-btn',
    prevEl: '.comment-prev-btn',
  },
  breakpoints: {
    1101: {
      slidesPerView: 2,
    }
  }
});

new Swiper('.manufacturer-slider', {
  loop: true,
  slidesPerView: 2,
  spaceBetween: 12,
  navigation: {
    prevEl: '.manufacturer-prev-btn',
    nextEl: '.manufacturer-next-btn',
  },
  breakpoints: {
    // 591: {
    //   slidesPerView: "auto",
    //   spaceBetween: 12,
    // },
    1301: {
      slidesPerView: 4,
      spaceBetween: 20,
    }
  }
});

let productGallerySlider = new Swiper('.product-gallery-second', {
  loop: true,
  slidesPerView: 4,
  spaceBetween: 10,
  watchSlidesProgress: true,
  freeMode: true,
  navigation: {
    nextEl: ".product-gallery-next-btn",
  },
  breakpoints: {
    591: {
      slidesPerView: 6,
      spaceBetween: 20,
    }
  }
});

new Swiper('.product-gallery-first', {
  loop: true,
  slidesPerView: 1,
  slidesPerGroup: 1,
  thumbs: {
    swiper: productGallerySlider,
  },
});

new Swiper('.product-comment-slider', {
  loop: true,
  slidesPerView: 12,
  spaceBetween: 20,
  navigation: {
    nextEl: '.product-comment-next-btn',
    prevEl: '.product-comment-prev-btn',
  }
});

new Swiper('.reviews-slider', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: '.reviews-next-btn',
    prevEl: '.reviews-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 3,
    },
    591: {
      slidesPerView: 1,
    }
  }
});

new Swiper('.info-slider', {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 20,
  navigation: {
    nextEl: '.info-next-btn',
    prevEl: '.info-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 3,
    }
  }
});

new Swiper('.advice-slider', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: '.advice-next-btn',
    prevEl: '.advice-prev-btn',
  },
  breakpoints: {
    591: {
      slidesPerView: "auto",
    },
    1301: {
      slidesPerView: 4,
    }
  }
});

new Swiper('.new-product-slider', {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 20,
  navigation: {
    nextEl: '.new-product-next-btn',
    prevEl: '.new-product-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 4,
    }
  }
});

new Swiper('.hit-product-slider', {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 20,
  navigation: {
    nextEl: '.hit-product-next-btn',
    prevEl: '.hit-product-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 4,
    }
  }
});

new Swiper('.discount-product-slider', {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 20,
  navigation: {
    nextEl: '.discount-product-next-btn',
    prevEl: '.discount-product-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 4,
    }
  }
});

new Swiper('.recommendation-product-slider', {
  loop: true,
  slidesPerView: "auto",
  spaceBetween: 20,
  navigation: {
    nextEl: '.recommendation-product-next-btn',
    prevEl: '.recommendation-product-prev-btn',
  },
  breakpoints: {
    991: {
      slidesPerView: 3,
    },
    1301: {
      slidesPerView: 4,
    },
    1451: {
      slidesPerView: 5,
    },
  }
});

if (window.innerWidth <= 1101) {
  new Swiper('.dealers-slider', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 10,
    navigation: {
      nextEl: '.dealers-next-btn',
      prevEl: '.dealers-prev-btn',
    },
    breakpoints: {
      591: {
        slidesPerView: 4,
      }
    }
  });
}

new Swiper('.similar-slider', {
  loop: true,
  slidesPerView: 'auto',
  slidesPerGroup: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: '.similar-product-next-btn',
    prevEl: '.similar-product-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 4,
      spaceBetween: 20,
    }
  }
});

new Swiper('.other-slider', {
  loop: true,
  slidesPerView: 'auto',
  slidesPerGroup: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: '.other-product-next-btn',
    prevEl: '.other-product-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 4,
      spaceBetween: 20,
    }
  }
});

new Swiper('.recommendation-product-slider', {
  loop: true,
  slidesPerView: 'auto',
  slidesPerGroup: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: '.other-product-next-btn',
    prevEl: '.other-product-prev-btn',
  },
  breakpoints: {
    1301: {
      slidesPerView: 4,
      spaceBetween: 20,
    }
  }
});

