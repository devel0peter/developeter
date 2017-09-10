$(document).ready(function () {
    
    /* Scroll to section buttons */
        
    $('.js--about-nav').click(function() {
        $('html, body').animate({ scrollTop: $('.js--section-about').offset().top}, 1000);
    });
    
    $('.js--portfolio-nav').click(function() {
        $('html, body').animate({ scrollTop: $('.js--section-portfolio').offset().top}, 1000);
    });
    
    $('.js--contact-nav').click(function() {
        $('html, body').animate({ scrollTop: $('.js--section-contact').offset().top}, 1000);
    });
    
    $('.js--scroll-to-portfolio').click(function() {
        $('html, body').animate({ scrollTop: $('.js--section-portfolio').offset().top}, 1000);
    });
    
    /* Hover links style */
    $('.js--white').hover(function() {
        $(this).css('color', '#efefef');
    }, function() {
        $(this).css('color', '#2dc1bb');
    });
    
    /* Portfolio images hover */
    $('#portfolio img').hover(function() {
        $(this).toggleClass('active-img');
    });
    
    
    /* FaceBook Page like button */
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
        
});



