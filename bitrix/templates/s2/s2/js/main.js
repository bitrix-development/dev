// FAQ Accordion
$('.faq-group').on("click", function () {
    // $('.faq-group').each(function () {
    //     $(this).removeClass("active");
    //     $(this).next().slideUp();
    // });

    $(this).next().slideToggle();

    if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        // $(this).next().slideUp();
    } else {
        $(this).addClass("active");
        // $(this).next().slideDown();
    }
});

$('.product-faq-card-group').on("click", function () {
    // $('.product-faq-card-group').each(function () {
    //     $(this).removeClass("active");
    //     $(this).next().slideUp();
    // })

    $(this).next().slideToggle();

    if ($(this).hasClass("active")) {
        $(this).removeClass("active");
    } else {
        $(this).addClass("active");
    }
});

// Description Block
$(".product-description-title-btn").on("click", function () {
    $(".product-description-box").slideToggle(400);
    $(this).toggleClass("rotate");
});

// Features Block
$(".product-features-title-btn").on("click", function () {
    $(".product-features-card").slideToggle(400);
    $(this).toggleClass("rotate");
});

// FAQ Block
$(".product-faq-title-btn").on("click", function () {
    $(".product-faq-group").slideToggle(400);
    $(this).toggleClass("rotate");
});

// Comment Block
$(".product-comment-title-btn").on("click", function () {
    $(".product-comment-empty-box").slideToggle(400);
    $(this).toggleClass("rotate");
});

// Filter Price
$(".filter-range-btn").on("click", function () {
    $(".price-range-block").slideToggle(400);
    $(this).toggleClass("rotate");
});

// Filter Manufacturer
$(".filter-manufacturer-btn").on("click", function () {
    $(".manufacturer-block").slideToggle(400);
    $(this).toggleClass("rotate");
});

// Filter Height
$(".filter-height-btn").on("click", function () {
    $(".height-list").slideToggle(400);
    $(this).toggleClass("rotate");
});

// Filter Modal
$(".category-product-filter-btn").on("click", function () {
    $(".filter-modal").show();
});

$(".filter-modal-close-btn").on("click", function () {
    $(".filter-modal").hide();
});

// Header Menu Buttons
$(".header-menu-modal").hide();

$(document).ready(function () {
    $(".header-menu-btn").on("click", function () {
        let currentMenuList = $(this).siblings(".header-menu-modal");

        $('.header-menu-item').each(function () {
            $('.header-menu-modal').slideUp();
        });

        if (!$(this).hasClass('rotate')) {
            $(".header-menu-btn").removeClass('rotate');
            $(this).addClass('rotate');
            currentMenuList.slideDown();
        } else {
            $(".header-menu-btn").removeClass('rotate');
            currentMenuList.slideUp();
        }
    });
});


if ((window.innerWidth > 590)) {
    window.setTimeout(function () {
        $(".product-features-block").hide()
    }, 1000)
} else {
    $(".product-features-block").show()
}

$(document).mouseup(function (e) {
    let container = $(".header");
    if (container.has(e.target).length === 0) {
        $(".header-menu-modal").slideUp();
        $(".header-menu-btn").removeClass("rotate");
    }
});

$(".info-tabs-btn").on("click", function () {
    if ($(this).hasClass("video")) {
        $(".info-video-container").show();
        $(".info-reviews-container").hide();
        $(".info-advice-container").hide();
        $(".info-tabs-btn").removeClass("active");
        $(this).addClass("active");
    }

    if ($(this).hasClass("reviews")) {
        $(".info-reviews-container").show();
        $(".info-video-container").hide();
        $(".info-advice-container").hide();
        $(".info-tabs-btn").removeClass("active");
        $(this).addClass("active");
    }

    if ($(this).hasClass("advice")) {
        $(".info-advice-container").show();
        $(".info-video-container").hide();
        $(".info-reviews-container").hide();
        $(".info-tabs-btn").removeClass("active");
        $(this).addClass("active");
    }
});

// Product Plus Button
$(".product-info-plus").on("click", function () {
    let val = parseFloat($(this).parent().find('input').val())
    let max_val = parseFloat($(this).parent().find('input').attr('max'))

    if (val < max_val) {
        $(this).parent().find('input').val(val + 1);
    }
});

// Product Minus Button
$(".product-info-minus").on("click", function () {
    let val = parseFloat($(this).parent().find('input').val())
    let max_val = parseFloat($(this).parent().find('input').attr('min'))

    if (val > max_val) {
        $(this).parent().find('input').val(val - 1);
    }
});

// Hide Reveal Block
$('.product-description-desc').moreContent({
    height: 100,
    textClose: 'Смотреть все описание',
    textOpen: 'Скрыть',
    shadow: true,
    tpl: {
        btn: '<button class="product-description-btn" type="button"></button>',
    }
});

$('.product-features-list').moreContent({
    height: 150,
    textClose: 'Смотреть все характеристики',
    textOpen: 'Скрыть',
    shadow: true,
    tpl: {
        btn: '<button class="product-features-btn" type="button"></button>',
    }
});

$('.product-info-features-list').moreContent({
    height: 200,
    textClose: 'Смотреть все характеристики',
    textOpen: 'Скрыть',
    shadow: true,
    tpl: {
        btn: '<button class="product-info-features-btn" type="button"></button>',
    }
});

$('.product-advertising-desc').moreContent({
    height: 100,
    textClose: 'Смотреть все',
    textOpen: 'Скрыть',
    shadow: true,
    tpl: {
        btn: '<button class="product-advertising-btn" type="button"></button>',
    }
});

$('.category-tabs-list').moreContent({
    height: 80,
    textClose: 'Смотреть все',
    textOpen: 'Скрыть',
    shadow: true,
    tpl: {
        btn: '<button class="category-tab-btn" type="button"></button>',
    }
});

$('.category-desc-box').moreContent({
    height: 140,
    textClose: 'Смотреть все',
    textOpen: 'Скрыть',
    shadow: true,
    tpl: {
        btn: '<button class="category-desc-btn" type="button"></button>',
    }
});

if (window.innerWidth <= 590) {
    $('.reviews-tabs-list').moreContent({
        height: 80,
        textClose: 'Смотреть все',
        textOpen: 'Скрыть',
        shadow: true,
        tpl: {
            btn: '<button class="reviews-tab-btn" type="button"></button>',
        }
    });
}

$(".footer-list-title-group").on("click", function () {
    if ($(window).width() < 992) {
        $(this).next().slideToggle(300);
        $(this).find(".footer-list-btn").toggleClass("rotate");
    }
});

$(window).resize(function () {
    if ($(window).width() > 992) {
        $(".footer-link-list").slideDown(300);
    }
})

// Mobile Header Modal
$(".header-mobile-btn").on("click", function () {
    $(".header-mobile-modal").show();
});

$(".header-mobile-modal-close").on("click", function () {
    $(".header-mobile-modal").hide();
});

$(document).mouseup(function (e) {
    let container = $(".header-mobile-modal");
    if (container.has(e.target).length === 0) {
        $(".header-mobile-modal").hide();
    }
});

// Custom Select
$(document).ready(function () {
    $(".custom-options").slideUp(300);

    $(".custom-select-btn").on("click", function () {
        $(".custom-options").slideToggle(300);
        $(this).toggleClass("active");
    })

    $(".custom-option").on("click", function () {
        let selectedOption = $(this).find(".custom-option-text").text();

        $(".custom-options").each(function () {
            $(this).find(".custom-option-text").removeClass("active");
        })
        $(this).find(".custom-option-text").addClass("active");

        $(".custom-select-title").text(selectedOption);
        $(".custom-options").slideUp(300);
    });
});

$(document).mouseup(function (e) {
    let container = $(".custom-select");
    if (container.has(e.target).length === 0) {
        $(".custom-options").slideUp(300);
        $(".custom-select-btn").removeClass("active");
    }
});

// Favorites Button
$(".product-card-btn").on("click", function () {
    $(this).toggleClass("active");
})

// $(window).on('scroll', function() {
//     if($(window).scrollTop() > $(".side-panels-block").offset().top) {
//         $(".side-panels-box").addClass('fixed');
//     } else {
//         $(".side-panels-box").removeClass('fixed');
//     }

//     // if ($(window).scrollTop() > offsetSection) {
//     //   if ($(window).scrollTop() < heightSection) {
//     //     $('.left div').removeClass('bottom');
//     //   } else {
//     //     $('.left div').addClass('bottom');
//     //     $('.left').height($('.right').height())
//     //   }
//     //   $('.left div').addClass('fixed');
//     // } else {
//     //   $('.left div').removeClass('fixed');
//     // }
//   })

// Order Call Modal
$(document).mouseup(function (e) {
    let container = $(".call-modal-wrapper");
    if (container.has(e.target).length === 0) {
        $(".call-modal").hide(300);
        $(".custom-select-btn").removeClass("active");
    }
});

// Features
// $(".product-menu-btn").one("click", function() {
//     if ($(this).hasClass("feature")) {
//         productFeaturesList();
//     }
// })

$(".product-menu-btn").on("click", function () {
    if ($(this).hasClass("description")) {
        $(".similar-product-section").hide();
        $(".product-comment-block").hide();
        $(".product-faq-block").hide();
        $(".product-hint-block").show();
        $(".product-features-block").hide();
        $(".product-description-block").show();
        $(".product-menu-btn").removeClass("active");
        $(this).addClass("active");
    }

    if ($(this).hasClass("feature")) {
        $(".similar-product-section").hide();
        $(".product-comment-block").hide();
        $(".product-faq-block").hide();
        $(".product-hint-block").hide();
        $(".product-features-block").show();
        $(".product-description-block").hide();
        $(".product-menu-btn").removeClass("active");
        $(this).addClass("active");

        // $('.product-features-list').moreContent({
        //     height: 150,
        //     textClose: 'Смотреть все характеристики',
        //     textOpen: 'Скрыть',
        //     shadow: true,
        //     tpl: {
        //         btn: '<button class="product-features-btn" type="button"></button>',
        //     }
        // });
    }

    if ($(this).hasClass("faq")) {
        $(".similar-product-section").hide();
        $(".product-comment-block").hide();
        $(".product-faq-block").show();
        $(".product-hint-block").hide();
        $(".product-features-block").hide();
        $(".product-description-block").hide();
        $(".product-menu-btn").removeClass("active");
        $(this).addClass("active");
    }

    if ($(this).hasClass("comment")) {
        $(".similar-product-section").hide();
        $(".product-comment-block").show();
        $(".product-faq-block").hide();
        $(".product-hint-block").hide();
        $(".product-features-block").hide();
        $(".product-description-block").hide();
        $(".product-menu-btn").removeClass("active");
        $(this).addClass("active");
    }

    if ($(this).hasClass("similar")) {
        $(".similar-product-section").show();
        $(".product-comment-block").hide();
        $(".product-faq-block").hide();
        $(".product-hint-block").hide();
        $(".product-features-block").hide();
        $(".product-description-block").hide();
        $(".product-menu-btn").removeClass("active");
        $(this).addClass("active");
    }
});

// Mobile Menu Modal
$(".header-mobile-modal-btn").on("click", function () {
    $(".header-mobile-modal-title").html($(this).siblings($('a')).text());

    $(".header-mobile-modal-info").show()
    $('.header-mobile-modal-list').hide();
    $('.header-mobile-nav').show();
    $(".header-mobile-nav-btn").removeClass("rotate");
})

$(".header-mobile-modal-back").on("click", function () {
    $(".header-mobile-modal-info").hide()
    $('.header-mobile-modal-list').show();
    $('.header-mobile-nav').hide();
    $(".header-mobile-nav-inner").slideUp();
})

$(".header-mobile-nav-btn").on("click", function () {
    $(this).parent().siblings(".header-mobile-nav-inner").slideToggle(300);
    $(this).toggleClass("rotate");
})

// Masked Input
$("input[name='phone']").mask("+7 (999) 999-99-99");