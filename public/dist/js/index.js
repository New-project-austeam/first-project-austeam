(()=>{console.log("js dloaded");const s=["./dist/images/sunset-4937813_1920.jpg","./dist/images/beach-4914403_1920.jpg","./dist/images/garbage-3745004_1920.jpg","./dist/images/nature-4202702_1920.jpg","./dist/images/flowers-1190773_1920.jpg"];let e=-1;setInterval((function(){4===e?(clearInterval(),$(".msg-1").addClass("hide"),$(".msg-2").addClass("hide"),setTimeout((function(){$(".msg-1").css({display:"none"}),$(".msg-2").css({display:"none"})}),3e3),$(".msg-1").addClass("hide"),$(".msg-2").addClass("hide"),$("#hidden-message").css({display:"block"}),setTimeout((function(){$("#hidden-message").addClass("show")}),1e3)):e<4&&e++,document.getElementById("slideshow").style.backgroundImage="url("+s[e]}),3500);const a=()=>{$(window).scrollTop()>=150?$(".back-to-top").fadeIn():$(".back-to-top").fadeOut()};$(window).on("scroll",a),$(".back-to-top").on("click",(s=>{s.preventDefault(),$("html,body").animate({scrollTop:0},600)})),a()})();