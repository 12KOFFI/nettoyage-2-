/* ------------------------------------------------

[ Custom settings ]

1. ScrollIt
2. Preloader
3. Navbar scrolling background 
4. Close navbar-collapse when a clicked 
5. Sections background image from data background
6. Animations
7. Slider & Slider Fade OwlCarousel 
8. Slider owlCarousel - (Inner Page Slider)
9. Slider owlCarousel (Homepage Slider)
10. Services 1 owlCarousel
11. Services 2 owlCarousel
12. Services 3 owlCarousel
13. Blog owlCarousel 
14. Testimonials owlCarousel
15. Team owlCarousel
16. Isotope Active Masonry Gallery
17. MagnificPopup Gallery
18. Smooth Scrolling
19. Scroll back to top
20. Accordion Box (for Faqs)
21. Initiate the wowjs
22. YouTubePopUp
23. Magnet Cursor
24. Mouse Cursor 
25. Button 

------------------------------------------------ */
$(function () {
    "use strict";
    var wind = $(window);
    // ScrollIt
    $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: "swing", // the easing function for animation
        scrollTime: 600, // how long (in ms) the animation takes
        activeClass: "active", // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: -70, // offste (in px) for fixed top navigation
    });

    // Preloader
    var CustomApp = {
        init: function () {
            this.handlePreloader();
        },
        handlePreloader: function () {
            $(document).ready(function () {
                $("#preloader").fadeOut(500);
                $(".preloader-bg").delay(300).fadeOut(500);
            });
            setTimeout(function () {
                $("#preloader").fadeOut(500);
                $(".preloader-bg").delay(300).fadeOut(500);
            }, 2000);
        },
    };
    $(document).ready(function () {
        CustomApp.init();
    });

    // Navbar scrolling background - OPTIMIZED (sticky header)
    const handleNavbarScroll = window.scrollOptimizer.throttle(function () {
        const bodyScroll =
            window.pageYOffset || document.documentElement.scrollTop;
        const navbarArea = document.querySelector(".navbar-area.sticky-nav");

        if (bodyScroll > 100) {
            if (navbarArea) navbarArea.classList.add("sticky-menu");
        } else {
            if (navbarArea) navbarArea.classList.remove("sticky-menu");
        }
    }, 16);

    window.addEventListener(
        "scroll",
        handleNavbarScroll,
        window.scrollOptimizer.scrollOptions,
    );

    // Close dropdown when a menu link is clicked
    $(".menu-wrap .dropdown-menu a").on("click", function () {
        $(this).closest(".dropdown-menu").hide().fadeOut(200);
    });

    // Sections background image from data background
    var pageSection = $(".bg-img, section");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css(
                "background-image",
                "url(" + $(this).data("background") + ")",
            );
        }
    });

    // Animations
    var contentWayPoint = function () {
        var i = 0;
        $(".animate-box").waypoint(
            function (direction) {
                if (
                    direction === "down" &&
                    !$(this.element).hasClass("animated")
                ) {
                    i++;
                    $(this.element).addClass("item-animate");
                    setTimeout(function () {
                        $("body .animate-box.item-animate").each(function (k) {
                            var el = $(this);
                            setTimeout(
                                function () {
                                    var effect = el.data("animate-effect");
                                    if (effect === "fadeIn") {
                                        el.addClass("fadeIn animated");
                                    } else if (effect === "fadeInLeft") {
                                        el.addClass("fadeInLeft animated");
                                    } else if (effect === "fadeInRight") {
                                        el.addClass("fadeInRight animated");
                                    } else {
                                        el.addClass("fadeInUp animated");
                                    }
                                    el.removeClass("item-animate");
                                },
                                k * 200,
                                "easeInOutExpo",
                            );
                        });
                    }, 100);
                }
            },
            {
                offset: "85%",
            },
        );
    };
    $(function () {
        contentWayPoint();
    });

    // Main Slider OwlCarousel (Homepage)
    var mainSlider = $(".main-slider");
    if (mainSlider.length) {
        mainSlider.owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: "fadeOut",
            smartSpeed: 1000,
            nav: true,
            navText: [
                '<i class="ti-angle-left" aria-hidden="true"></i>',
                '<i class="ti-angle-right" aria-hidden="true"></i>',
            ],
            responsiveClass: true,
            responsive: {
                0: { dots: true, nav: false },
                768: { dots: true, nav: true },
                1000: { dots: true, nav: true },
            },
        });
        // Animate slide content on change
        mainSlider.on("changed.owl.carousel", function (event) {
            var item = event.item.index - 2;
            $(".main-slider .theme-content")
                .find("h3, h1, p, .av-btn")
                .removeClass("animated fadeInUp fadeInDown");
            $(".main-slider .owl-item")
                .not(".cloned")
                .eq(item)
                .find(".theme-content h3")
                .addClass("animated fadeInDown");
            $(".main-slider .owl-item")
                .not(".cloned")
                .eq(item)
                .find(".theme-content h1")
                .addClass("animated fadeInUp");
            $(".main-slider .owl-item")
                .not(".cloned")
                .eq(item)
                .find(".theme-content p")
                .addClass("animated fadeInUp");
            $(".main-slider .owl-item")
                .not(".cloned")
                .eq(item)
                .find(".theme-content .av-btn")
                .addClass("animated fadeInUp");
        });
    }

    // Slider owlCarousel - (Inner Page Slider)
    $(".slider .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 5000,
        nav: false,
        navText: [
            '<i class="ti-angle-left" aria-hidden="true"></i>',
            '<i class="ti-angle-right" aria-hidden="true"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: { dots: true },
            600: { dots: true },
            1000: { dots: true },
        },
    });

    // Services 1 owlCarousel
    $(".services2 .owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        mouseDrag: true,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        dots: false,
        nav: false,
        navText: [
            "<span class='lnr ti-angle-left'></span>",
            "<span class='lnr ti-angle-right'></span>",
        ],
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // Services 2 owlCarousel
    $(".services1 .owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        mouseDrag: true,
        autoplay: false,
        autoplayTimeout: 5000,
        smartSpeed: 500,
        dots: false,
        nav: false,
        navText: [
            "<span class='lnr ti-angle-left'></span>",
            "<span class='lnr ti-angle-right'></span>",
        ],
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 2,
            },
        },
    });

    // Services 3 owlCarousel
    $(".services3 .owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        autoplayHoverPause: true,
        nav: false,
        navText: [
            "<span class='lnr ti-angle-left'></span>",
            "<span class='lnr ti-angle-right'></span>",
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // Blog owlCarousel
    $(".blog .owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        mouseDrag: true,
        autoplay: false,
        dots: false,
        autoplayHoverPause: true,
        nav: false,
        navText: [
            "<span class='lnr fa-light fa-angle-left'></span>",
            "<span class='lnr fa-light fa-angle-right'></span>",
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // Partner Carousel – Ils nous font confiance
    $(".partner-carousel").owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplaySpeed: 800,
        smartSpeed: 800,
        dots: false,
        nav: false,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 4,
            },
            1000: {
                items: 5,
            },
        },
    });

    // Team owlCarousel
    $(".team .owl-carousel").owlCarousel({
        loop: true,
        margin: 20,
        mouseDrag: true,
        autoplay: false,
        autoplayTimeout: 3000,
        smartSpeed: 500,
        dots: false,
        nav: false,
        navText: [
            "<span class='lnr ti-angle-left'></span>",
            "<span class='lnr ti-angle-right'></span>",
        ],
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // Isotope Active Masonry Gallery
    $(".gallery-items").imagesLoaded(function () {
        // Add isotope on click filter function
        $(".gallery-filter li").on("click", function () {
            $(".gallery-filter li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr("data-filter");
            $(".gallery-items").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: "linear",
                    queue: false,
                },
            });
            return false;
        });
        $(".gallery-items").isotope({
            itemSelector: ".single-item",
            layoutMode: "masonry",
        });
    });

    // MagnificPopup Gallery
    $(".gallery").magnificPopup({
        delegate: ".popimg",
        type: "image",
        gallery: {
            enabled: true,
        },
    });
    $(".img-zoom").magnificPopup({
        type: "image",
        closeOnContentClick: !0,
        mainClass: "mfp-fade",
        gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1],
        },
    });
    $(".magnific-youtube, .magnific-vimeo, .magnific-custom").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false,
    });
    $(".image-popup-vertical-fit").magnificPopup({
        type: "image",
        closeOnContentClick: true,
        mainClass: "mfp-img-mobile",
        image: {
            verticalFit: true,
        },
    });

    // Smooth Scrolling
    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            if (
                location.pathname.replace(/^\//, "") ==
                    this.pathname.replace(/^\//, "") &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length
                    ? target
                    : $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                    event.preventDefault();
                    $("html, body").animate(
                        {
                            scrollTop: target.offset().top,
                        },
                        600,
                        function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) {
                                // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                        },
                    );
                }
            }
        });

    // Scroll back to top
    var progressPath = document.querySelector(".progress-wrap path");
    var scrollTopDuration = 600;
    if (progressPath) {
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition =
            "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition =
            "stroke-dashoffset 10ms linear";
        var updateProgress = window.scrollOptimizer.throttle(function () {
            var scroll =
                window.pageYOffset || document.documentElement.scrollTop;
            var height =
                document.documentElement.scrollHeight - window.innerHeight;
            var progress = pathLength - (scroll * pathLength) / height;
            progressPath.style.strokeDashoffset = progress;

            // Progress wrap visibility
            var progressWrap = document.querySelector(".progress-wrap");
            if (progressWrap) {
                if (scroll > 150) {
                    progressWrap.classList.add("active-progress");
                } else {
                    progressWrap.classList.remove("active-progress");
                }
            }
        }, 16);
        updateProgress();
        window.addEventListener(
            "scroll",
            updateProgress,
            window.scrollOptimizer.scrollOptions,
        );
    }
    jQuery(".progress-wrap").on("click", function (event) {
        event.preventDefault();
        jQuery("html, body").animate(
            {
                scrollTop: 0,
            },
            scrollTopDuration,
        );
        return false;
    });

    // Accordion Box (for Faqs)
    if ($(".accordion-box").length) {
        $(".accordion-box").on("click", ".acc-btn", function () {
            var outerBox = $(this).parents(".accordion-box");
            var target = $(this).parents(".accordion");
            if ($(this).next(".acc-content").is(":visible")) {
                //return false;
                $(this).removeClass("active");
                $(this).next(".acc-content").slideUp(300);
                $(outerBox).children(".accordion").removeClass("active-block");
            } else {
                $(outerBox).find(".accordion .acc-btn").removeClass("active");
                $(this).addClass("active");
                $(outerBox).children(".accordion").removeClass("active-block");
                $(outerBox)
                    .find(".accordion")
                    .children(".acc-content")
                    .slideUp(300);
                target.addClass("active-block");
                $(this).next(".acc-content").slideDown(300);
            }
        });
    }

    // Initiate the wowjs - OPTIMIZED
    const wowOffset = window.innerWidth <= 768 ? 30 : 100;
    new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: wowOffset,
        mobile: true,
        live: false,
        scrollContainer: null,
    }).init();

    // Mobile Drawer Logic
    const mobileMenuOpen = document.getElementById("mobileMenuOpen");
    const mobileMenuClose = document.getElementById("mobileMenuClose");
    const mobileDrawer = document.getElementById("mobileDrawer");
    const drawerOverlay = document.getElementById("drawerOverlay");
    const submenuToggles = document.querySelectorAll(".submenu-toggle");

    if (mobileMenuOpen && mobileDrawer && drawerOverlay) {
        mobileMenuOpen.addEventListener("click", () => {
            mobileDrawer.classList.add("open");
            drawerOverlay.classList.add("active");
            document.body.style.overflow = "hidden"; // Prevent scroll
        });

        const closeDrawer = () => {
            mobileDrawer.classList.remove("open");
            drawerOverlay.classList.remove("active");
            document.body.style.overflow = "";
        };

        mobileMenuClose.addEventListener("click", closeDrawer);
        drawerOverlay.addEventListener("click", closeDrawer);

        // Submenu Toggle
        submenuToggles.forEach((toggle) => {
            toggle.addEventListener("click", (e) => {
                const parent = toggle.parentElement;
                const submenu = parent.querySelector(".drawer-submenu");
                if (submenu) {
                    parent.classList.toggle("active");
                    $(submenu).slideToggle(300);
                }
            });
        });
    }

    // YouTubePopUp
    $("a.vid").YouTubePopUp();

    // Magnet Cursor
    function magnetize(el, e) {
        var mX = e.pageX,
            mY = e.pageY;
        const item = $(el);
        const customDist = item.data("dist") * 20 || 80;
        const centerX = item.offset().left + item.width() / 2;
        const centerY = item.offset().top + item.height() / 2;
        var deltaX = Math.floor(centerX - mX) * -0.35;
        var deltaY = Math.floor(centerY - mY) * -0.35;
        var distance = calculateDistance(item, mX, mY);
        if (distance < customDist) {
            TweenMax.to(item, 0.5, {
                y: deltaY,
                x: deltaX,
                scale: 1,
            });
            item.addClass("magnet");
        } else {
            TweenMax.to(item, 0.6, {
                y: 0,
                x: 0,
                scale: 1,
            });
            item.removeClass("magnet");
        }
    }
    function calculateDistance(elem, mouseX, mouseY) {
        return Math.floor(
            Math.sqrt(
                Math.pow(mouseX - (elem.offset().left + elem.width() / 2), 2) +
                    Math.pow(
                        mouseY - (elem.offset().top + elem.height() / 2),
                        2,
                    ),
            ),
        );
    }
    function lerp(a, b, n) {
        return (1 - n) * a + n * b;
    }

    // Mouse Cursor - OPTIMIZED
    class Cursor {
        constructor() {
            this.bind();
            this.cursor = document.querySelector(".js-cursor");
            if (!this.cursor) return;
            this.mouseCurrent = { x: 0, y: 0 };
            this.mouseLast = { x: 0, y: 0 };
            this.rAF = undefined;
            this.isMoving = false;
        }
        bind() {
            ["getMousePosition", "run"].forEach(
                (fn) => (this[fn] = this[fn].bind(this)),
            );
        }
        getMousePosition(e) {
            this.mouseCurrent = { x: e.clientX, y: e.clientY };
            if (!this.isMoving) {
                this.isMoving = true;
                this.requestAnimationFrame();
            }
        }
        run() {
            const deltaX = Math.abs(this.mouseLast.x - this.mouseCurrent.x);
            const deltaY = Math.abs(this.mouseLast.y - this.mouseCurrent.y);

            if (deltaX < 0.1 && deltaY < 0.1) {
                this.isMoving = false;
                return;
            }

            this.mouseLast.x = lerp(this.mouseLast.x, this.mouseCurrent.x, 0.2);
            this.mouseLast.y = lerp(this.mouseLast.y, this.mouseCurrent.y, 0.2);
            this.mouseLast.x = Math.floor(this.mouseLast.x * 100) / 100;
            this.mouseLast.y = Math.floor(this.mouseLast.y * 100) / 100;
            this.cursor.style.transform = `translate3d(${this.mouseLast.x}px, ${this.mouseLast.y}px, 0)`;
            this.rAF = requestAnimationFrame(this.run);
        }
        requestAnimationFrame() {
            this.rAF = requestAnimationFrame(this.run);
        }
        addEvents() {
            window.addEventListener("mousemove", this.getMousePosition, {
                passive: true,
            });
        }
        on() {
            this.addEvents();
        }
        init() {
            this.on();
        }
    }
    if ($(".js-cursor").length > 0 && window.innerWidth > 1024) {
        const cursor = new Cursor();
        cursor.init();
        // cursor conditions
        const dragItems =
            ".slider-wrapper .owl-theme .item, .slider-fade .owl-theme .item, .services1 .owl-theme .item, .services2 .owl-theme .item, .team .owl-theme .item, .testimonials .owl-theme .item, .blog .owl-theme .item";
        $(dragItems)
            .on("mouseenter", function () {
                $(".cursor").addClass("drag");
            })
            .on("mouseleave", function () {
                $(".cursor").removeClass("drag active");
            });
        // <a> disable
        $(dragItems)
            .find("a")
            .on("mouseenter", function () {
                $(".cursor").removeClass("drag active");
            })
            .on("mouseleave", function () {
                $(".cursor").addClass("drag");
            });
        // Drag small
        $(document).on("mousedown", function () {
            if ($(".cursor").hasClass("drag")) {
                $(".cursor").addClass("active");
            }
        });
        $(document).on("mouseup", function () {
            $(".cursor").removeClass("active");
        });
    }

    // Before-After
    const items = document.querySelectorAll(".before-after .item");
    items.forEach((container) => {
        const overlay = container.querySelector(".item-overlay");
        const handle = container.querySelector(".handle");
        let isDragging = false;
        const setPosition = (x) => {
            const rect = container.getBoundingClientRect();
            let offsetX = x - rect.left;
            if (offsetX < 0) offsetX = 0;
            if (offsetX > rect.width) offsetX = rect.width;
            const percent = (offsetX / rect.width) * 100;
            overlay.style.width = percent + "%";
            handle.style.left = percent + "%";
        };
        handle.addEventListener("mousedown", () => {
            isDragging = true;
        });
        window.addEventListener("mouseup", () => {
            isDragging = false;
        });
        window.addEventListener("mousemove", (e) => {
            if (!isDragging) return;
            setPosition(e.clientX);
        });
        // touch support
        handle.addEventListener("touchstart", () => {
            isDragging = true;
        });
        window.addEventListener("touchend", () => {
            isDragging = false;
        });
        window.addEventListener("touchmove", (e) => {
            if (!isDragging) return;
            setPosition(e.touches[0].clientX);
        });
    });

    // Tilter 3D Effect on Features Cards
    $(".tilter")
        .on("mousemove", function (e) {
            var $el = $(this);
            var w = $el.width(),
                h = $el.height();
            var offset = $el.offset();
            var x = ((e.pageX - offset.left - w / 2) / w) * 12;
            var y = ((e.pageY - offset.top - h / 2) / h) * 12;
            $el.css(
                "transform",
                "perspective(600px) rotateY(" +
                    x +
                    "deg) rotateX(" +
                    -y +
                    "deg)",
            );
        })
        .on("mouseleave", function () {
            $(this).css(
                "transform",
                "perspective(600px) rotateY(0deg) rotateX(0deg)",
            );
        });

    // Button
    const buttons = document.querySelectorAll(
        ".btn-wrap .button-1 .call-button .button",
    );
    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            button.classList.toggle("active");
        });
    });
});
