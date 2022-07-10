<a href="#" class="goTop" id="goTop">
  <img src="<?php bloginfo('template_directory'); ?>/assets/img/goTop.png" alt="">
</a>
  </main>
    
      
    


    <footer>
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/whiteLogo.png" alt="logo">
        <p>電話 02-27162255 | <br>
            信箱  service@sinchengmgmt.com | <br>
            地址 台北市中山區南京東路三段219號9樓909室<br>
            © 2020 - Sin Cheng All Rights Reserved. Site Designed by LearnTake原點學用
        </p>
           

    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
    <script  type="text/javascript" src="./func.js"></script>
    <script>
      
  jQuery(document).ready(function() {
  var sync1 = jQuery("#sync1");
  var sync2 = jQuery("#sync2");
  var slidesPerPage = 5; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1
    .owlCarousel({
    items: 1,
    slideSpeed: 3000,
    nav: true,

    //   animateOut: 'fadeOut',
    animateIn: "fadeIn",
    autoplayHoverPause: true,
    autoplaySpeed: 1400, //過場速度
    dots: false,
    loop: true,
    responsiveClass: true,
    responsive: {
      0: {
        item: 1,
        autoplay: false
      },
      600: {
        items: 1,
        autoplay: true
      }
    },
    responsiveRefreshRate: 200,
    navText: [
      '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
      '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
    ]
  })
    .on("changed.owl.carousel", syncPosition);

  sync2
    .on("initialized.owl.carousel", function() {
    sync2
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: slidesPerPage,
    dots: true,
    //   nav: true,
    smartSpeed: 1000,
    slideSpeed: 1000,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;

    //if you disable loop you have to comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }

    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find(".owl-item.active").length - 1;
    var start = sync2
    .find(".owl-item.active")
    .first()
    .index();
    var end = sync2
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      sync2.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      sync2.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      sync1.data("owl.carousel").to(number, 100, true);
    }
  }

  sync2.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = jQuery(this).index();
    sync1.data("owl.carousel").to(number, 300, true);
  });
});

//向下滑後導覽列背景顯示為白色
  function scroll() {
      const top = $(".navbar").offset().top; //獲取位置
      if(top != 0){  
      $(".navbar").removeClass("screen-top");
      }else{
      $(".navbar").addClass("screen-top");
      }
      };


    
  
$(window).on('scroll', function(){
  scroll()
});

//點擊後display由inline-block轉為block
$(document).ready(function(){
$('.button-toggle').click(function(e){
  e.preventDefault();
  $('.navbar-menu').toggleClass('active');
});
});

//切換功能
let mytab = function (v) {
let but = document.getElementsByTagName("button");
for (let i = 0; i < but.length; i++) {
    let butt = but[i];
    if (butt == document.getElementById("tabb" + v)) {
        butt.style.backgroundColor = "#668047";
        butt.style.color = "#fff";
    } else {
        butt.style.backgroundColor = "#fff";
        butt.style.color = "#000";
    }
}

//課程 ＆ 活動切換
let divs = document.getElementsByClassName("tabb_css");
for (let i = 0; i < divs.length; i++) {

    let divv = divs[i];

    if (divv == document.getElementById("tabb" + v + "_content")) {
        divv.style.display = "block";
    } else {
        divv.style.display = "none";
    }
}
}

//點擊後加載更多
$(document).ready(function(){
  $(".card-container").slice(0, 3).show();
  $(".loadMore1").on("click", function(e){
    e.preventDefault();
    $(".card-container:hidden").slice(0, 3).slideDown();
    if($(".card-container:hidden").length == 0) {
      $(".loadMore1").hide();
    }
  });
  $(".card-container2").slice(0, 3).show();
  $(".loadMore2").on("click", function(h){
    h.preventDefault();
    $(".card-container2:hidden").slice(0, 3).slideDown();
    if($(".card-container2:hidden").length == 0) {
      $(".loadMore2").hide();
    }
  });
})
//點擊圖標回到網頁最上層
$(function(){
$("#goTop").click(function(){
    jQuery("html,body").animate({
    scrollTop:0
    },1000);
});
//目前的位置距離網頁頂端，若大於300px則顯示回上層圖示;否則隱藏
$(window).scroll(function() {
   if ( $(this).scrollTop() > 300){
      $('#goTop').fadeIn("fast");
   } else {
      $('#goTop').stop().fadeOut("fast");
   }
});
});

</script>
   

</body>
</html>