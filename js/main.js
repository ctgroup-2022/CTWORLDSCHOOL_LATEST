(function ($) {
    "use strict";
    // Preloader
   
  $(window).on('load', function() {
    $('.ctw_loader').addClass('hidden');
  });
    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-200px');
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });

    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        const content = document.getElementById('content');
        
        loader.style.display = 'none'; 
        content.style.display = 'block';
    });
    
    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });

    // faq hidden data
    document.addEventListener('DOMContentLoaded', function() {
        var readMoreLinks = document.querySelectorAll('.read-more');
        
        readMoreLinks.forEach(function(readMoreLink) {
            readMoreLink.addEventListener('click', function() {
                var hiddenPart = this.previousElementSibling;
                if (hiddenPart.style.display === 'none' || hiddenPart.style.display === '') {
                    hiddenPart.style.display = 'inline';
                    this.textContent = 'Read Less';
                } else {
                    hiddenPart.style.display = 'none';
                    this.textContent = 'Read More';
                }
            });
        });
    });

    //single page gallery
    let items = document.querySelectorAll('.gallery .list .item');
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');
    let thumbnails = document.querySelectorAll('.thumbnail .item');
    
    // config param
    let countItem = items.length;
    let itemActive = 0;
    // event next click
    next.onclick = function(){
        itemActive = itemActive + 1;
        if(itemActive >= countItem){
            itemActive = 0;
        }
        showgallery();
    }
    //event prev click
    prev.onclick = function(){
        itemActive = itemActive - 1;
        if(itemActive < 0){
            itemActive = countItem - 1;
        }
        showgallery();
    }
    // gallery
    let refreshInterval = setInterval(() => {
        next.click();
    }, 5000)
    function showgallery(){
        // remove item active old
        let itemActiveOld = document.querySelector('.gallery .list .item.active');
        let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
        itemActiveOld.classList.remove('active');
        thumbnailActiveOld.classList.remove('active');
    
        // active new item
        items[itemActive].classList.add('active');
        thumbnails[itemActive].classList.add('active');
    
        // clear auto time run gallery
        clearInterval(refreshInterval);
        refreshInterval = setInterval(() => {
            next.click();
        }, 5000)
    }
    
    // thumbnail
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            itemActive = index;
            showgallery();
        })
    });
   

    //caption carousel
    document.addEventListener('DOMContentLoaded', function() {
        const captions = document.querySelectorAll('.carousel-item .carousel-caption');
        captions.forEach((caption, index) => {
            if (index % 2 === 0) {
                caption.classList.add('carousel-caption-left');
            } else {
                caption.classList.add('carousel-caption-right');
            }
        });
    });
    
    
    

   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
  

})(jQuery);

