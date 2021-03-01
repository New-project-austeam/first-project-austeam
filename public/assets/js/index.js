console.log("js loaded")
/* 配列に画像 */
const setImage =[
'./dist/images/sunset-4937813_1920.jpg',
'./dist/images/beach-4914403_1920.jpg',
'./dist/images/garbage-3745004_1920.jpg',
'./dist/images/nature-4202702_1920.jpg',
'./dist/images/flowers-1190773_1920.jpg'];

let num = -1;


function slideimage(){

    if( num === 4){

        num = 0;
 /* ≈document.getElementById(‘’).style.display = ‘block’;
      Or
       const show = document.getElementById(‘’);
       Show.style.display =‘block’;*/

　　　
    } else{


      num ++

    }
    document.getElementById( "slideshow" ).style.backgroundImage = "url(" + setImage[num];


}
setInterval(slideimage,3500);

/*  画像は最初の一枚に戻ってから、ループを止めて、htmlとcssで用意したメッセージを表示する。　cssで非表示にしておいて、JSで０（最初の画像）に戻ったらループを止めて、メッセージを表示する。*/


/* トップ戻るボタン　Jquery */

const backTop = () =>{
  if($(window).scrollTop() >= 150){
    $('.back-to-top').fadeIn();
  } else {
    $('.back-to-top').fadeOut();
  }
};

$(window).on('scroll',backTop);


$('.go-to-top').on('click',(e)=>{
   e.preventDefault();

   $('html,body').animate({scrollTop : 0},600);
});


backTop();
