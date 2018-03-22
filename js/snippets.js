$(document).ready(function(){
    
    if (window.innerWidth  > 800 ) {
        window.sr = ScrollReveal({ reset: true });
        sr.reveal('.item-reveal-left', { delay: 1000, origin: 'left', scale:1, distance: '50vw', easing: 'ease-out', duration: '350' } );
        sr.reveal('.item-reveal-right', { delay: 1000, origin: 'right', scale:1, distance: '50vw', easing: 'ease-out', duration: '350' } );
        sr.reveal('.item-reveal-header', { delay: 300, viewOffset: { bottom: 400 }, reset: false } );
        sr.reveal('.item-reveal-tile-1', { delay: 200, origin: 'left', scale:1, distance: '50vw'} );
        sr.reveal('.item-reveal-tile-2', { delay: 50, origin: 'right', scale:1, distance: '50vw' } );
        sr.reveal('.item-reveal-tile-3', { delay: 350, origin: 'left', scale:1, distance: '50vw' } );
        sr.reveal('.item-reveal-tile-4', { delay: 500, origin: 'right', scale:1, distance: '50vw' } );
        sr.reveal('[class*="item-reveal"]', { scale: 0.5, distance: '10vw' });
        sr.reveal('.item-reveal-fade', { delay: 100, scale: 1, distance: '0', reset: false } );
        sr.reveal('.item-reveal-1', { delay: 200, scale: 0.5, distance: '50vw' } );
        sr.reveal('.item-reveal-2', { delay: 400, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-3', { delay: 600, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-4', { delay: 800, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-5', { delay: 1000, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-6', { delay: 1200, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-7', { delay: 1400, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-8', { delay: 1600, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-9', { delay: 1800, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-10', { delay: 2000, scale: 0.5, distance: '10vw' } );
        sr.reveal('.item-reveal-fade-1', { delay: 200, duration: 800, scale: 1, distance: '0' } );
        sr.reveal('.item-reveal-fade-2', { delay: 500, duration: 800, scale: 1, distance: '0' } );
        sr.reveal('.item-reveal-fade-3', { delay: 800, duration: 800, scale: 1, distance: '0' } );
        sr.reveal('.item-reveal-fade-4', { delay: 1100, duration: 800, scale: 1, distance: '0' } );
        sr.reveal('.item-reveal-fade-5', { delay: 1400, duration: 800, scale: 1, distance: '0' } );
        sr.reveal('.item-reveal-fade-6', { delay: 1700, duration: 800, scale: 1, distance: '0' } );
    }
       
    $(function() {
        $('.match-height').matchHeight();
    });
    
    $('.toggle-target').click(function() {
            var target = '#' + $(this).data('target');
            $(target).slideToggle('fast');
            if ( $(target).hasClass('hidden-sm-down') ) {
                $(target).toggleClass('hidden-sm-down');
        }
    });
    
    $('.toggle-target-next').next().hide();
    
    $('.toggle-target-next').click(function() {
        $(this).next().slideToggle('fast');
    });
    
    $('.toggle-is-toggled').click(function() {
		if ($(this).hasClass('is-toggled')) {
            $(this).removeClass('is-toggled');
        } else {
            $(this).addClass('is-toggled');
        }
    });
    
    $('.toggle-section-menu,.toggle-menu').click(function() {
		if ($('body').hasClass('section-menu-is-visible')) {
            $('body').removeClass('section-menu-is-visible');
        } else {
            $('body').addClass('section-menu-is-visible');
        }
    });
    
    $('.read-more a').click(function(e) {
        $(this).parents('.read-more-parent').toggleClass('read-more-parent-expanded');
        $(this).html() == 'Read Less' ? $(this).html('Read More') : $(this).html('Read Less');
        e.preventDefault();
    });
    
    // Enable parallax and fade effects on homepage sections
	$(window).scroll(function(){
		scrolltop = $(window).scrollTop()
		scrollwindow = scrolltop + $(window).height();
		$(".stripe-intro, .bg-triangles-top-dark, .hero").css("backgroundPosition", "50% " + -(scrolltop/6) + "px");
	});

    // page-specific rendering
    if (document.getElementById('automotive')) {
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true,
            pagination: '.swiper-pagination',
            slidesPerView: 4,
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            centeredSlides: true,
            slideToClickedSlide:true,
            spaceBetween: 20
        })
        $(window).resize(function(){
            var ww = $(window).width()
            if (ww>1000) mySwiper.params.slidesPerView = 4;
            if (ww>600 && ww<=1000) mySwiper.params.slidesPerView = 3;
            if (ww<=600) mySwiper.params.slidesPerView = 1;
            mySwiper.update()
        })
        $(window).trigger('resize')
        
        var headerOffset = $('#navbar').outerHeight();
        var introOffset = $('.stripe-intro').outerHeight();
        var navOffset = $('.stripe-section-nav').outerHeight();
        var navHeaderOffset = headerOffset + navOffset;
        var navHeaderIntroOffset = headerOffset + navOffset +introOffset;
        
        var controller = new ScrollMagic.Controller({
            globalSceneOptions: {
                reverse: true
            }
        });

        var tl = new TimelineMax({
          yoyo:true
        });

        var $container = $('#automotive');
        var subpage = $container.data('subpage');
        var numScenes = $container.data('scenes');
        console.log('subpage', subpage)
        console.log('numScenes', numScenes)

        switch (subpage) {
            case 'connectivity':
                tl
                .staggerFrom(".path", .7, {drawSVG:0, ease:Power1.easeInOut}, 0.2)
                .fromTo(".path-circle", .7, {drawSVG:0}, {drawSVG:"102%"}, "-=.5")
                .to(".circle01", .5, { fill:"#6dadfd", ease:Power4.easeOut}, "-=.25")
                .to(".path08", .15, { fill:"#2a82f1", ease:Power4.easeOut})
                .to(".path05", .15, { fill:"#1a74d6", ease:Power4.easeOut})
                .to(".path03", .15, { fill:"#e2e3e4", ease:Power4.easeOut})
                .to(".path01", .15, { fill:"#dadbdc", ease:Power4.easeOut})
                .to(".path,.path-circle", .5, {autoAlpha:0, ease:Linear.easeNone})
                .to(".final-img", 2.5, {autoAlpha:1, ease:Power4.easeOut});

                break;

            case 'autonomous':
                tl
                .staggerFrom(".path-circle", .5, {drawSVG:0, ease:Power1.easeInOut}, 0.2)
                .staggerFrom(".path", .5, {drawSVG:0, ease:Power1.easeInOut}, 0.2, "-=.5")
                .to(".final-img", 2.5, {autoAlpha:1, ease:Power4.easeOut})
                .to(".path,.path-circle", .5, {autoAlpha:0, ease:Linear.easeNone}, "-=2.0");

                break;

            case 'electrification':
            case 'architecture':
                tl
                .staggerFrom(".path", .75, {drawSVG:0, ease:Power1.easeInOut}, 0.2)
                .to(".final-img", 2.5, {autoAlpha:1, ease:Power4.easeOut})
                .to(".path", .75, {autoAlpha:0, ease:Linear.easeNone}, "-=2.0");

                break;
        }
        
        if (window.innerHeight  < 1000 ) {
            var sceneAnim = new ScrollMagic.Scene({triggerElement: ".stripe-intro", triggerHook: '0', offset: 0}) // start the scroll main animation
            .setTween(tl);
        } else {
            var sceneAnim = new ScrollMagic.Scene({triggerElement: 'body', triggerHook: 'onLeave', offset: 0})
            .setTween(tl);
        }
        
        var sceneBody = new ScrollMagic.Scene({triggerElement: ".stripe-intro", triggerHook: '0', offset: 50}) // add body class when the user starts scrolling
            .setClassToggle("body", "scroll-started");
        
        var sceneNav = new ScrollMagic.Scene({triggerElement: "#stripe-fixed-next", triggerHook: 'onLeave', offset: -headerOffset})
            .setPin("#stripe-fixed-next")
            .setClassToggle("body", "section-nav-affixed");
            
        var reverseAnim = new ScrollMagic.Scene({triggerElement: "#stripe-fixed-next", triggerHook: 'onLeave', offset:  -headerOffset})
            .on("enter", function(event) {
                tl.play();
                //console.log('entered on scroll down');
            })
            .on("leave", function(event) {
                tl.reverse();
                //console.log('re-entered on scroll up');
            });
        

        var scenes = [
            sceneAnim,
            reverseAnim,
            sceneBody,
            sceneNav
        ];

        for (var i = 1; i < numScenes; i++) {
            scenes.push(
                new ScrollMagic.Scene(
                    {triggerElement: '#section-' + i, triggerHook: 'onLeave', duration: $("#section-" + i).outerHeight(), offset: -navHeaderOffset})
                    .setClassToggle("#high-" + i, "active")
            );
        }
        scenes.push(
            new ScrollMagic.Scene({triggerElement: '#section-last', triggerHook: 'onLeave', duration: $("#section-last").outerHeight(), offset: -navHeaderOffset})
            .setClassToggle("#high-last", "active")
        );
            
        controller.addScene(scenes);
            
        controller.scrollTo(function (newpos) {
            TweenMax.to(window, 0.5, {scrollTo: {y: newpos, offsetY: navHeaderOffset - 1} });
        });

        //  bind scroll to anchor links
        $(document).on("click", "a[href^='#']", function (e) {
            var id = $(this).attr("href");
            if ($(id).length > 0) {
                e.preventDefault();
                // trigger scroll
                controller.scrollTo(id);
                // if supported by the browser update the URL.
                if (window.history && window.history.pushState) {
                    history.pushState("", document.title, id);
                }
            }
        });
    }
});