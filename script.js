$(document).ready(function() {
    $(window).scroll(function(){
         if(this.scrollY > 20){
             $(".navbar").addClass("sticky");
         }else{
             $(".navbar").removeClass("sticky");
         }
         if(this.scrollY > 600){
            $(".scroll-up-btn").addClass("show");
         }else{
            $(".scroll-up-btn").removeClass("show");
         }
     }); 
  // side-up script
    $(".scroll-up-btn").click(function(){
    $("html").animate({scrollTop: 0})
    
    });
  // toggle menu/navbar script .toggleClass
    
    $(".menu-btn").click(function(){
    $(".navbar .menu").toggleClass("active");
    $(".menu-btn i").toggleClass("active");
  });
  // typing animation script
  var typed = new Typed(".typing",{
      strings: ["Developer...Ups!", "PHP Developer...it's better now!","Designer...Maybe!",],
      typeSpeed: 100,
      backSpeed: 100,
      loop: true
  });
   /* var typed = new Typed(".typing-1",{
    strings: ["",],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
    }); */ 
  // owl carousel 
  $(".carousel").owlCarousel({
    margine: 20,
    loop: true,
    autoplayTimeOut: 2000,
    autoplayHoverePause: true,
    responsive: {
        0:{
            items: 1,
            nav: false
        },
        600:{
            items: 2,
            nav: false
        },
        1000:{
            items: 3,
            nav: false
        }
    }
  
  });
});