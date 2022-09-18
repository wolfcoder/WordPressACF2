jQuery(window).on("load", function() {

  $(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.footer-column a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });
  });

  AOS.init({
    duration: 1400,
    once: true
  });

  jQuery("a.smoothscroll").click(function (e) {
    e.preventDefault();
    jQuery("html, body").animate({
      scrollTop: jQuery(jQuery(this).attr("href")).offset().top
    }, 500);
  });

  $("header .nav-item").hover(
    function() {
      $(this).addClass("active");
    }, function() {
      $(this).removeClass("active");
    }
  );

  $('header .mobile-submenu-toggle').on('click', function(){
    $(this).parent().toggleClass("active-mobile");
    $(this).parent().removeClass("active");
  });

  jQuery(".navbar-toggler").click(function(){
    jQuery("body").toggleClass("menu-shows");
  });

  jQuery(".mobile-footer-menu-toggle").click(function(){
    jQuery(".mobile-footer-menu").toggleClass("show");
    jQuery(this).children(".img-fluid").toggleClass("d-none");
  });

  jQuery(".mobile-toggle-area-hrz-tabs").click(function(){
    jQuery(this).toggleClass("active");
    jQuery(this).siblings(".content-area").toggleClass("mobile-active");
  });



  $('.testimonial-area').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
  });

  $('.testimonial-img-area').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
  });

  $('.testi-img-prev').click(function(){
    $(".testimonial-img-area").slick('slickPrev');
  });
  $('.testi-img-next').click(function(){
    $(".testimonial-img-area").slick('slickNext');
  });

  jQuery('.label-placeholder input').keyup(function() {
    if($.trim(jQuery(this).val())) {
      jQuery(this).parents().addClass('placeholder-active');
    } else {
      jQuery(this).parents().removeClass('placeholder-active');
    }
  });
  
  function setupTypewriter(t) {
      var HTML = t.innerHTML;
      t.innerHTML = "";
      var cursorPosition = 0,
          tag = "",
          writingTag = false,
          tagOpen = false,
          typeSpeed = 10,
          tempTypeSpeed = 0;

      var type = function() {
        
          if (writingTag === true) {
              tag += HTML[cursorPosition];
          }

          if (HTML[cursorPosition] === "<") {
              tempTypeSpeed = 0;
              if (tagOpen) {
                  tagOpen = false;
                  writingTag = true;
              } else {
                  tag = "";
                  tagOpen = true;
                  writingTag = true;
                  tag += HTML[cursorPosition];
              }
          }
          if (!writingTag && tagOpen) {
              tag.innerHTML += HTML[cursorPosition];
          }
          if (!writingTag && !tagOpen) {
              if (HTML[cursorPosition] === " ") {
                  tempTypeSpeed = 0;
              }
              else {
                  tempTypeSpeed = (Math.random() * typeSpeed) + 50;
              }
              t.innerHTML += HTML[cursorPosition];
          }
          if (writingTag === true && HTML[cursorPosition] === ">") {
              tempTypeSpeed = (Math.random() * typeSpeed) + 50;
              writingTag = false;
              if (tagOpen) {
                  var newSpan = document.createElement("span");
                  t.appendChild(newSpan);
                  newSpan.innerHTML = tag;
                  tag = newSpan.firstChild;
              }
          }

          cursorPosition += 1;
          if (cursorPosition < HTML.length - 1) {
              setTimeout(type, tempTypeSpeed);
          }

      };

      return {
          type: type
      };
  }

  function checktyper() {
    $('.code-area.aos-animate').show(function() {
        if ($(this).is(':visible')){
          // var typer = document.getElementById('typewriter');
          typewriter = setupTypewriter(typewriter);
          typewriter.type();
        }
    });
  }

  window.setInterval(checktyper, 100);

});