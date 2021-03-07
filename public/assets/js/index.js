console.log("js loaded")
/* 配列に画像 */
const setImage = [
  './dist/images/sunset-4937813_1920.jpg',
  './dist/images/beach-4914403_1920.jpg',
  './dist/images/garbage-3745004_1920.jpg',
  './dist/images/nature-4202702_1920.jpg',
  './dist/images/flowers-1190773_1920.jpg'];

let num = -1;

<<<<<<< HEAD

function slideimage() {
=======
function slideimage(){
>>>>>>> top.php

  if (num === 4) {

<<<<<<< HEAD
    num = 0;

=======
        clearInterval();

        $('.msg-1').fadeOut(1500);
        $('.msg-2').fadeOut(1500);
        $('#hidden-message').fadeIn(2500);
>>>>>>> top.php

        //jsでfadeOut/Inの時間設定が難しい。。。
        //document.querySelector('.msg-1').style.display='none';
        //document.querySelector('.msg-2').style.display='none';

        //const showMessage = document.getElementById('hidden-message');
        //showMessage.style.display ='block';
        //showMessage.fadeIn('slow');
　　　
    } else if(num < 4 ){

  } else {


<<<<<<< HEAD
    num++

  }
  document.getElementById("slideshow").style.backgroundImage = "url(" + setImage[num];


}
setInterval(slideimage, 3500);
=======
    }
    document.getElementById( "slideshow" ).style.backgroundImage = "url(" + setImage[num];
    return;

}

setInterval(slideimage,3500);
>>>>>>> top.php



/*  画像は最初の一枚に戻ってから、ループを止めて、htmlとcssで用意したメッセージを表示する。　cssで非表示にしておいて、JSで０（最初の画像）に戻ったらループを止めて、メッセージを表示する。*/


/* トップ戻るボタン　Jquery */

const backTop = () => {
  if ($(window).scrollTop() >= 150) {
    $('.back-to-top').fadeIn();
  } else {
    $('.back-to-top').fadeOut();
  }
};

$(window).on('scroll', backTop);


<<<<<<< HEAD
$('.go-to-top').on('click', (e) => {
  e.preventDefault();

  $('html,body').animate({ scrollTop: 0 }, 600);
=======
$('.back-to-top').on('click',(e)=>{
  e.preventDefault();

  $('html,body').animate({scrollTop : 0},600);
>>>>>>> top.php
});


backTop();


//セクションタイトルもアニメつける

//コンテンツをフワッと出す


//ログインとサインアップのモーダル


/* const loginModal = getElementById('');
loginModal.addEventListener('click',(){
    $('').fadeIn();
})
 */
