(function($) {
	  
    if($('#wpadminbar').length > 0) {
        $('.site-header').css('top','33px')
    }

    // mobile nav
    var mobileMenuBtn = $('button.menu-toggle'),
        primaryMenuList = $('#primary-menu')

    function toggleMobileMenu() {
        primaryMenuList.toggleClass('active')

        if(primaryMenuList.hasClass('active')) {
            primaryMenuList.slideDown()
        } else {
            primaryMenuList.slideUp()
        }
    }
    
    mobileMenuBtn.on('click', toggleMobileMenu)


    // mobile submenu
    if($('.menu-item-has-children').length > 0) {
        $('.menu-item-has-children').on('click', function() {

            $(this).toggleClass('active')

            if($(this).hasClass('active')) {
                $(this).find('.sub-menu').slideDown()
            } else {
                $(this).find('.sub-menu').slideUp()
            }
        })
    }




    /* Sticky Navbar */
    window.onscroll = function() {handleStickyNav()};

    var navbar = document.getElementById("masthead");
    // var sticky = navbar.offsetTop;

    function handleStickyNav() {
        console.log('hi')
        if (window.pageYOffset >= 150) {
            navbar.classList.add("sticky-nav")
        } else {
            navbar.classList.remove("sticky-nav");
        }
    }


    
	
})( jQuery );