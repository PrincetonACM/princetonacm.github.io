$(".full img").on("click", function() {
  $(this).toggleClass("zoom");
});

// Animations for the galleries on the "Get Involved" page
$(".student-gallery").children().mouseup(function() {
  const toActivate = $(this);
  const toDeactivate = $(".student-gallery").children();
  const currentlyActive = toActivate.hasClass("active");

  toDeactivate.removeClass("active");
  toDeactivate.removeAttr("href");

  if (currentlyActive) {
    toActivate.attr("href", $(this).attr("data"));
  }
  toActivate.addClass("active");
});

$(".org-gallery").children().mouseup(function() {
  const toActivate = $(this);
  const toDeactivate = $(".org-gallery").children();
  const currentlyActive = toActivate.hasClass("active");

  toDeactivate.removeClass("active");
  toDeactivate.removeAttr("href");

  if (currentlyActive) {
    toActivate.attr("href", $(this).attr("data"));
  }
  toActivate.addClass("active");
});

const imgContent = document.querySelectorAll('.img-content-hover');

function showImgContent(e) {
  for(var i = 0; i < imgContent.length; i++) {
    x = e.pageX;
    y = e.pageY;
    imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
  }
};

(function($) {

  $.fn.menumaker = function(options) {

      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) {
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            //if (settings.format === "dropdown") {
            //  mainmenu.find('ul').show();
            //}
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');
        resizeFix = function() {
          if ($( window ).width() > 1024) {
            cssmenu.find('ul').show().addClass('open');
          }

          if ($(window).width() <= 1024) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
  $(document).ready(function(){
    $("#cssmenu").menumaker({
      title: "Menu",
      format: "multitoggle"
    });
  });
})(jQuery);

document.addEventListener('mousemove', showImgContent);

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "block";
    slides[i].className = slides[i].className.replace("visible", "hidden")
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  dots[slideIndex-1].className += " active";
  slides[slideIndex-1].className = slides[slideIndex-1].className.replace("hidden", "visible")
  // slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
;
