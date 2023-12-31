(function ($) {
    "use strict";
    jQuery(window).on("load", function () {
        $(".egns-preloader").delay(1600).fadeOut("slow");
    });
    $("select").niceSelect();
    jQuery("#datepicker").datepicker({ format: "dd-mm-yyyy", startDate: "+1d" });
    window.addEventListener("scroll", function () {
        const header = document.querySelector("header.style-1, header.style-2, header.style-3,header.style-4,header.style-5");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
    $(".search-btn").on("click", function () {
        $(".mobile-search").addClass("slide");
    });
    $(".search-cross-btn").on("click", function () {
        $(".mobile-search").removeClass("slide");
    });
    $(".mobile-menu-btn").on("click", function () {
        $(".main-nav").addClass("show-menu");
    });
    $(".menu-close-btn").on("click", function () {
        $(".main-nav").removeClass("show-menu");
    });
    $(".main-nav .bi").on("click", function (event) {
        var $fl = $(this);
        $(this).parent().siblings().find(".sub-menu").slideUp();
        $(this).parent().siblings().find(".bi").addClass("bi-chevron-down");
        if ($fl.hasClass("bi-chevron-down")) {
            $fl.removeClass("bi-chevron-down").addClass("bi-chevron-up");
        } else {
            $fl.removeClass("bi-chevron-up").addClass("bi-chevron-down");
        }
        $fl.next(".sub-menu").slideToggle();
    });
    var toggleIcon = document.querySelectorAll(".sidebar-btn");
    var closeIcon = document.querySelectorAll(".cross-icon");
    var searchWrap = document.querySelectorAll(".menu-toggle-btn-full-shape");
    toggleIcon.forEach((element) => {
        element.addEventListener("click", () => {
            document.querySelectorAll(".menu-toggle-btn-full-shape").forEach((el) => {
                el.classList.add("show-sidebar");
            });
        });
    });
    closeIcon.forEach((element) => {
        element.addEventListener("click", () => {
            document.querySelectorAll(".menu-toggle-btn-full-shape").forEach((el) => {
                el.classList.remove("show-sidebar");
            });
        });
    });
    window.onclick = function (event) {
        searchWrap.forEach((el) => {
            if (event.target === el) {
                el.classList.remove("show-sidebar");
            }
        });
    };
    var swiper = new Swiper(".mySwiper", { spaceBetween: 10, slidesPerView: 4, freeMode: true, autoplay: true, watchSlidesProgress: true });
    var swiper2 = new Swiper(".mySwiper2", { spaceBetween: 10, autoplay: true, effect: "fade", navigation: { nextEl: ".banner2-next", prevEl: ".banner2-prev" }, thumbs: { swiper: swiper } });
    var swiper = new Swiper(".banner1-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 15,
        effect: "fade",
        fadeEffect: { crossFade: true },
        autoplay: true,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".banner1-prev", prevEl: ".banner1-next" },
    });
    var swiper = new Swiper(".banner2-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 15,
        effect: "fade",
        fadeEffect: { crossFade: true },
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".banner1-prev", prevEl: ".banner1-next" },
    });
    var swiper = new Swiper(".banner4-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 15,
        effect: "fade",
        fadeEffect: { crossFade: true },
        autoplay: true,
        loop: true,
        pagination: { el: ".swiper-banner-pagination", clickable: true },
    });
    var swiper = new Swiper(".banner5-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 15,
        effect: "fade",
        fadeEffect: { crossFade: true },
        autoplay: true,
        loop: false,
        pagination: {
            el: ".swiper-pagination-number",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    });
    var swiper = new Swiper(".best-plan-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 25,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".plan1-prev", prevEl: ".plan1-next" },
        breakpoints: { 280: { slidesPerView: 1, navigation: false }, 576: { slidesPerView: 2, navigation: false }, 768: { slidesPerView: 2, navigation: false }, 992: { slidesPerView: 3 }, 1200: { slidesPerView: 3 } },
    });
    var swiper = new Swiper(".offer-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 25,
        autoplay: true,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: false,
        breakpoints: { 280: { slidesPerView: 1, navigation: false }, 576: { slidesPerView: 1, navigation: false }, 768: { slidesPerView: 2, navigation: false }, 992: { slidesPerView: 3 }, 1200: { slidesPerView: 3 } },
    });
    var swiper = new Swiper(".partner-slider", {
        slidesPerView: 2,
        speed: 1200,
        spaceBetween: 20,
        autoplay: true,
        loop: true,
        roundLengths: true,
        breakpoints: {
            280: { slidesPerView: 2, navigation: false },
            320: { slidesPerView: 2, navigation: false },
            576: { slidesPerView: 3, navigation: false },
            768: { slidesPerView: 4, navigation: false },
            992: { slidesPerView: 3 },
            1200: { slidesPerView: 3 },
            1400: { slidesPerView: 3 },
        },
    });
    var swiper = new Swiper(".insta-feed-slider", {
        slidesPerView: 1,
        loop: true,
        freeMode: true,
        spaceBetween: 0,
        grabCursor: true,
        slidesPerView: 7,
        loop: true,
        autoplay: { delay: 1, disableOnInteraction: true },
        freeMode: true,
        speed: 5000,
        freeModeMomentum: false,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        breakpoints: {
            280: { slidesPerView: 1, navigation: false },
            386: { slidesPerView: 2, navigation: false },
            576: { slidesPerView: 3, navigation: false },
            768: { slidesPerView: 4, navigation: false },
            992: { slidesPerView: 5 },
            1200: { slidesPerView: 5 },
            1400: { slidesPerView: 6 },
        },
    });
    var swiper = new Swiper(".wild-package-slider", {
        slidesPerView: 1,
        speed: 800,
        loop: true,
        freeMode: true,
        spaceBetween: 0,
        grabCursor: true,
        slidesPerView: 7,
        loop: true,
        freeModeMomentum: false,
        navigation: { nextEl: ".wild-package-prev", prevEl: ".wild-package-next" },
        pagination: { el: ".swiper-pagination", clickable: "true" },
        breakpoints: {
            280: { slidesPerView: 1, navigation: false },
            420: { slidesPerView: 2, navigation: false },
            576: { slidesPerView: 2, navigation: false },
            768: { slidesPerView: 3, navigation: false },
            992: { slidesPerView: 3 },
            1200: { slidesPerView: 4 },
            1400: { slidesPerView: 4 },
        },
    });
    var swiper = new Swiper(".package-slider2", {
        slidesPerView: 1,
        speed: 800,
        loop: true,
        freeMode: true,
        spaceBetween: 25,
        grabCursor: true,
        slidesPerView: 7,
        loop: true,
        freeModeMomentum: false,
        navigation: { nextEl: ".package2-prev", prevEl: ".package2-next" },
        pagination: { el: ".swiper-pagination", clickable: "true" },
        breakpoints: {
            280: { slidesPerView: 1, navigation: false },
            420: { slidesPerView: 1, navigation: false },
            576: { slidesPerView: 2, navigation: false },
            768: { slidesPerView: 2, navigation: false },
            992: { slidesPerView: 3 },
            1200: { slidesPerView: 3 },
            1400: { slidesPerView: 3 },
            1500: { slidesPerView: 4 },
        },
    });
    new Swiper(".testimonial1-slider", { slidesPerView: 1, speed: 1000, autoplay: true, spaceBetween: 25, loop: true, roundLengths: true, pagination: { el: ".testimonial1-pagination", clickable: "true" } });
    new Swiper(".testimonial2-slider", {
        slidesPerView: 1,
        speed: 1000,
        autoplay: true,
        spaceBetween: 45,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".testi2-next", prevEl: ".testi2-prev" },
        breakpoints: { 280: { slidesPerView: 1, navigation: false }, 386: { slidesPerView: 1, navigation: false }, 576: { slidesPerView: 1, navigation: false }, 768: { slidesPerView: 1, navigation: false }, 992: { slidesPerView: 2 } },
    });
    new Swiper(".testimonial4-slider", {
        slidesPerView: 1,
        speed: 1000,
        autoplay: true,
        spaceBetween: 25,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".testi4-next", prevEl: ".testi4-prev" },
        breakpoints: { 280: { slidesPerView: 1, navigation: false }, 386: { slidesPerView: 1, navigation: false }, 576: { slidesPerView: 1, navigation: false }, 768: { slidesPerView: 1, navigation: false }, 992: { slidesPerView: 2 } },
    });
    new Swiper(".testimonial5-slider", {
        slidesPerView: 1,
        speed: 1000,
        autoplay: true,
        spaceBetween: 25,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".testi2-next", prevEl: ".testi2-prev" },
        breakpoints: { 280: { slidesPerView: 1, navigation: false }, 386: { slidesPerView: 1, navigation: false }, 576: { slidesPerView: 1, navigation: false }, 768: { slidesPerView: 1, navigation: false }, 992: { slidesPerView: 2 } },
    });
    var swiper = new Swiper(".trip-category-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 25,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: false,
        breakpoints: { 280: { slidesPerView: 1, navigation: false }, 576: { slidesPerView: 1, navigation: false }, 768: { slidesPerView: 2, navigation: false }, 992: { slidesPerView: 3 }, 1200: { slidesPerView: 3 } },
    });
    var swiper = new Swiper(".tour-package-selider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 20,
        autoplay: true,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".package1-next", prevEl: ".package1-prev" },
        breakpoints: {
            280: { slidesPerView: 1, navigation: false },
            386: { slidesPerView: 1, navigation: false },
            576: { slidesPerView: 2, navigation: false },
            768: { slidesPerView: 2, navigation: false },
            992: { slidesPerView: 3 },
            1200: { slidesPerView: 3 },
            1400: { slidesPerView: 4 },
        },
    });
    var swiper = new Swiper(".destination5-slider", {
        slidesPerView: 1,
        speed: 800,
        spaceBetween: 25,
        autoplay: true,
        loop: true,
        roundLengths: true,
        pagination: { el: ".swiper-pagination", clickable: "true" },
        navigation: { nextEl: ".destination5-next", prevEl: ".destination5-prev" },
        breakpoints: {
            280: { slidesPerView: 1, navigation: false },
            420: { slidesPerView: 2, navigation: false },
            576: { slidesPerView: 2, navigation: false },
            768: { slidesPerView: 3, navigation: false },
            992: { slidesPerView: 4 },
            1200: { slidesPerView: 4 },
            1400: { slidesPerView: 5 },
        },
    });
    var swiper = new Swiper(".blog-slider", {
        slidesPerView: 1,
        speed: 1200,
        spaceBetween: 15,
        effect: "fade",
        fadeEffect: { crossFade: true },
        autoplay: true,
        loop: true,
        roundLengths: true,
        navigation: { nextEl: ".blog1-prev", prevEl: ".blog1-next" },
    });
    $(".counter-single").each(function () {
        $(this).isInViewport(function (status) {
            if (status === "entered") {
                for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                    var el = document.querySelectorAll(".odometer")[i];
                    el.innerHTML = el.getAttribute("data-odometer-final");
                }
            }
        });
    });
    $(".popup-youtube").magnificPopup({ type: "iframe" });
    $(".image-open").magnificPopup({ type: "image", gallery: { enabled: true } });
    $(".star-icon").each(function () {
        $(this)
            .on(
                "hover",
                function () {
                    $(this).prevAll().addBack().css("color", "#90B956");
                },
                function () {
                    if (!$(this).parent().attr("data-rating")) {
                        $(this).prevAll().addBack().css("color", "lightgrey");
                    } else {
                        $(this)
                            .siblings()
                            .addBack()
                            .each(function (index) {
                                index + 1 <= $(this).parent().attr("data-rating") ? $(this).css("color", "#90B956") : $(this).css("color", "lightgrey");
                            });
                    }
                }
            )
            .on("click", function () {
                $(this)
                    .parent()
                    .attr("data-rating", $(this).prevAll().length + 1);
            });
    });
    document.addEventListener("DOMContentLoaded", function (event) {
        let offset = 50;
        let circleContainer = document.querySelector(".circle-container");
        let circlePath = document.querySelector(".circle-container path");
        let pathLength = circlePath.getTotalLength();
        circlePath.style.transition = circlePath.style.WebkitTransition = "none";
        circlePath.style.strokeDasharray = pathLength;
        circlePath.style.strokeDashoffset = pathLength;
        circlePath.getBoundingClientRect();
        circlePath.style.transition = circlePath.style.WebkitTransition = "stroke-dashoffset 10ms linear";
        let updateLoader = () => {
            let scrollTop = window.scrollY;
            let docHeight = document.body.offsetHeight;
            let winHeight = window.innerHeight;
            let height = docHeight - winHeight;
            let progress = pathLength - (scrollTop * pathLength) / height;
            circlePath.style.strokeDashoffset = progress;
            if (scrollTop > offset) {
                circleContainer.classList.add("active");
            } else {
                circleContainer.classList.remove("active");
            }
        };
        circleContainer.onclick = function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        };
        window.onscroll = () => {
            updateLoader();
        };
        updateLoader();
    });
    $("#price-range-submit").hide();
    $("#min_price,#max_price").on("change", function () {
        $("#price-range-submit").show();
        var min_price_range = $("#min_price").val();
        var max_price_range = $("#max_price").val();
        if (min_price_range > max_price_range) {
            $("#max_price").val(min_price_range);
        }
        $("#slider-range").slider({ values: [min_price_range, max_price_range] });
    });
    $("#min_price,#max_price").on("paste keyup", function () {
        $("#price-range-submit").show();
        var min_price_range = parseInt($("#min_price").val(), 100);
        var max_price_range = parseInt($("#max_price").val(), 10000);
        if (min_price_range == max_price_range) {
            max_price_range = min_price_range + 100;
            $("#min_price").val(min_price_range);
            $("#max_price").val(max_price_range);
        }
        $("#slider-range").slider({ values: [min_price_range, max_price_range] });
    });
    $(function () {
        $("#slider-range").slider({
            range: true,
            orientation: "horizontal",
            min: 0,
            max: 10000,
            values: [0, 10000],
            step: 100,
            slide: function (event, ui) {
                if (ui.values[0] == ui.values[1]) {
                    return false;
                }
                $("#min_price").val(ui.values[0]);
                $("#max_price").val(ui.values[1]);
            },
        });
        $("#min_price").val($("#slider-range").slider("values", 0));
        $("#max_price").val($("#slider-range").slider("values", 1));
    });
    $("#slider-range,#price-range-submit").on("click", function () {
        var min_price = $("#min_price").val();
        var max_price = $("#max_price").val();
        $("#searchResults").text("Here List of products will be shown which are cost between " + min_price + " " + "and" + " " + max_price + ".");
    });
    $(function () {
        $("#slider-range-mobile").slider({
            range: true,
            orientation: "horizontal",
            min: 0,
            max: 10000,
            values: [0, 10000],
            step: 100,
            slide: function (event, ui) {
                if (ui.values[0] == ui.values[1]) {
                    return false;
                }
                $("#min_price-mobile").val(ui.values[0]);
                $("#max_price-mobile").val(ui.values[1]);
            },
        });
        $("#min_price-mobile").val($("#slider-range-mobile").slider("values", 0));
        $("#max_price-mobile").val($("#slider-range-mobile").slider("values", 1));
    });
    $("#slider-range-mobile,#price-range-submit").on("click", function () {
        var min_price = $("#min_price-mobile").val();
        var max_price = $("#max_price-mobile").val();
        $("#searchResults").text("Here List of products will be shown which are cost between " + min_price + " " + "and" + " " + max_price + ".");
    });
    $(".filter-button").on("click", function () {
        $(".tour-package-sidebar-mobile").toggleClass("show");
    });
    $(".package-sidebar-close").on("click", function () {
        $(".tour-package-sidebar-mobile").removeClass("show");
    });
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");
    if (togglePassword) {
        togglePassword.addEventListener("click", function (e) {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            this.classList.toggle("bi-eye");
        });
    }
    const togglePassword2 = document.getElementById("togglePassword2");
    const password2 = document.querySelector("#password2");
    if (togglePassword2) {
        togglePassword2.addEventListener("click", function (e) {
            const type = password2.getAttribute("type") === "password" ? "text" : "password";
            password2.setAttribute("type", type);
            this.classList.toggle("bi-eye");
        });
    }
})(jQuery);
