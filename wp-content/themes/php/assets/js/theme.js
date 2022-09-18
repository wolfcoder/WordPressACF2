AOS.init({
	duration: 1400,
	once: true
});



const jQuerydropdown = jQuery(".dropdown");
const jQuerydropdownToggle = jQuery(".dropdown-toggle");
const jQuerydropdownMenu = jQuery(".dropdown-menu");
const showClass = "show";
var width = jQuery(window).width();

jQuery(window).on("load resize", function() {

  var OSName="unknown";
  if (navigator.appVersion.indexOf("Win")!=-1) OSName="windows";
  if (navigator.appVersion.indexOf("Mac")!=-1) OSName="mac";
  if (navigator.appVersion.indexOf("X11")!=-1) OSName="unix";
  if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
  jQuery("body").addClass(OSName);
  
  jQuerydropdownToggle.click(
    function(e) {
      // e.preventDefault();
      const jQuerythis = jQuery(this);
      jQuerythis.parent().toggleClass(showClass);
      // jQuerythis.find(jQuerydropdownToggle).attr("aria-expanded", "true");
      jQuerythis.parent().find(jQuerydropdownMenu).toggleClass(showClass);
      // console.log('hii');
    }
  );


  if (width > 1200) {
    jQuerydropdown.mouseover(
      function() {
        const jQuerythis = jQuery(this);
        jQuerythis.addClass(showClass);
        // jQuerythis.find(jQuerydropdownToggle).attr("aria-expanded", "true");
        jQuerythis.find(jQuerydropdownMenu).addClass(showClass);
      }
    );
  
    jQuerydropdown.mouseleave(
      function() {
        const jQuerythis = jQuery(this);
        jQuerythis.removeClass(showClass);
        // jQuerythis.find(jQuerydropdownToggle).attr("aria-expanded", "true");
        jQuerythis.find(jQuerydropdownMenu).removeClass(showClass);
        // console.log('hii');
      }
    );
  } 

  
  jQuery(".newsroom .newsroom_area .item:hidden").slice(0, 4).show();

  if(jQuery(".newsroom .newsroom_area .item:hidden").length < 1){
    jQuery('.newsroom .load_more').hide();
  }

  jQuery(document).on('click', '.newsroom .load_more a', function(e){
      e.preventDefault();
      console.log('hii')
      jQuery(".newsroom  .newsroom_area .item:hidden").slice(0, 4).show();
      if(jQuery(".newsroom .newsroom_area .item:hidden").length < 1){
          jQuery('.newsroom .load_more').hide();
      }
  })

  jQuery('.navbar-toggler').click(function() {
      jQuery('.navbar-toggler-icon').toggleClass('hidden');
      jQuery('.close_navbar').toggleClass('hidden');  
  });

  jQuery('.video_img .video_area .play_video').click(function(e){
      jQuery(this).parent().find('.popup').css('display','block');
      // console.log(e.target);
  })

  jQuery('.play-btn').click(e => {
      jQuery('.popup').css('display','block');
  })

  jQuery('.popup').click(e => {
      var content = e.target.innerHTML
      e.target.innerHTML = ''
      jQuery('.popup').css('display','none');
      e.target.innerHTML = content
  })

  jQuery(document).on("click", function(e){
      var $trigger = jQuery(".popup");
      var $trigger2 = jQuery(".play-btn");
      var $trigger3 = jQuery(".video_img .video_area .play_video");
      if(!jQuery(e.target).is($trigger) && !$trigger.has(e.target).length && !jQuery(e.target).is($trigger2) && !$trigger2.has(e.target).length && !jQuery(e.target).is($trigger3) && !$trigger3.has(e.target).length){
        jQuery('.popup').css('display','none');
      }                                           
  });

  jQuery('.testimonial-slider').slick({
      autoplay:true,
      autoplaySpeed:1500,
      dots:true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
  })

  jQuery('.testimonials').slick({
      dots:false,
      infinite: true,
      arrow: true,
      slidesToShow: 1,
      slidesToScroll: 1
  })

  // jQuery('.testimonial-slider-home').slick({
  //     dots:false,
  //     infinite: true,
  //     arrow: true,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     variableWidth: true,
  //     centerMode: true,
  //     centerPadding: '0px',
  // })

  jQuery('.testimonial-slider-home').owlCarousel({
      center: true,
      items:3,
      loop:true,
      // singleItem: true,
      autoWidth:true,
      // margin: -80,
      dots: false,
      navText: [" ", " "],
      afterAction: function(el){    
        //add class active
        this
        .$owlItems //owl internal $ object containing items
        .eq(this.currentItem  + 1)
        .addClass('activeAfter')    
      } 
  });

  // Get the last item in the path (e.g. index.php)
  let url = window.location.pathname.split('/').pop();
  // console.log(url)

  // Add active nav class based on url
  jQuery(".navbar-nav li a").each(function () {
    if (jQuery(this).attr("href") == url || jQuery(this).attr("href") == '') {
      jQuery(this).closest('.navbar-nav > li a').addClass("active");
      jQuery(this).closest('.navbar-nav > li > ul > li a').addClass("active");
      jQuery(this).closest('.navbar-nav > li > ul > li > ul > li a').addClass("active");
    }
    console.log(url);
  })

  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("header_new");

  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }


});