function slideshowFnc() {



  /* 配列に画像 */
  const setImage = [
    './dist/images/sunset-4937813_1920.jpg',
    './dist/images/beach-4914403_1920.jpg',
    './dist/images/garbage-3745004_1920.jpg',
    './dist/images/nature-4202702_1920.jpg',
    './dist/images/flowers-1190773_1920.jpg'];

  let num = -1;

  function slideimage() {

    if (num === 4) {

      clearInterval();



      //jsでfadeOut/Inの時間設定が難しい。。。
      //document.querySelector('.msg-1').style.display='none';
      //document.querySelector('.msg-2').style.display='none';

      //const showMessage = document.getElementById('hidden-message');
      //showMessage.style.display ='block';
      //showMessage.fadeIn('slow');
      $('.msg-1').addClass("hide");
      $('.msg-2').addClass("hide");


      setTimeout(function () {

        $('.msg-1').css({ display: "none" });
        $('.msg-2').css({ display: "none" });

      }, 3000);


      $('.msg-1').addClass('hide');
      $('.msg-2').addClass('hide');

      $('#hidden-message').css({ display: "block" });
      setTimeout(function () {
        $('#hidden-message').addClass('show');

      }, 1000);

      ////
      //jsでfadeOut/Inの時間設定が難しい。。。
      //document.querySelector('.msg-1').style.display='none';
      //document.querySelector('.msg-2').style.display='none';

      //const showMessage = document.getElementById('hidden-message');
      //showMessage.style.display ='block';
      //showMessage.fadeIn('slow');

    } else if (num < 4) {
      num++;
    }
    document.getElementById("slideshow").style.backgroundImage = "url(" + setImage[num];
    return;

  }

  setInterval(slideimage, 3500);


}

module.exports = slideshowFnc;
//インポートする時の文言
