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
