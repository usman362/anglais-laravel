(function(){
  
  var stickyElement = $(".sticky"),
      stickyClass = "sticky-pin",
      stickyPos = 66, //Distance from the top of the window.
      stickyHeight;

  

  ///Create a negative margin to prevent content 'jumps':
  stickyElement.after('<div class="jumps-prevent"></div>');
  function jumpsPrevent() {
    stickyHeight = stickyElement.innerHeight();
    stickyElement.css({"margin-bottom":"-" + stickyHeight + "px"});
    stickyElement.next().css({"padding-top": + stickyHeight + "px"}); 
  };
  jumpsPrevent(); //Run.

  //Function trigger:
  $(window).resize(function(){
    jumpsPrevent();
  });

  //Sticker function:
  function stickerFn() {
    var winTop = $(this).scrollTop();
    //Check element position:
    winTop >= stickyPos ?
      stickyElement.addClass(stickyClass):
      stickyElement.removeClass(stickyClass) //Boolean class switcher.
  };
  stickerFn(); //Run.
  
  function stickerhoverFn(hover) {
    var winTop = $(this).scrollTop();
    //Check element position:
    winTop >= stickyPos ?
      hover.addClass('sidemenu-scroll'):
      hover.removeClass('sidemenu-scroll') //Boolean class switcher.
  };
  let hoverSubmenu = $('.hover-submenu .main-sidebar')
  let hoverSubmenu1 = $('.hover-submenu1 .main-sidebar')
  stickerhoverFn(hoverSubmenu)
  stickerhoverFn(hoverSubmenu1)
  //Function trigger:
  $(window).scroll(function(){
    stickerFn();
    stickerhoverFn(hoverSubmenu)
    stickerhoverFn(hoverSubmenu1)
  });

})();

// sidemenu
(function(){
 	$('.side-menu').scroll(function() {
    var s = $(".side-menu .ps__rail-y");
    if(s[0]?.style.top.split('px')[0] <= 60){
      $('.side-menu').removeClass('sidemenu-scroll')      
    } 
    else{
      $('.side-menu').addClass('sidemenu-scroll')
    }
  
   })
})();

// FOOTER
    document.getElementById("year").innerHTML = new Date().getFullYear();