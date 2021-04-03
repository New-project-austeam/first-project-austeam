
import $ from "jquery";
window.$ = $;
console.log("js loaded")
const backTopFnc = require('./modules/backTop.js');
const slideshowFnc = require('./modules/slideshow.js');
const setPostData = require('./modules/setPostData.js');
const loginModal = require('./modules/loginform.js')
const ajaxTest = require('./modules/ajax_test.js')
const createEvent = require('./modules/createEvent.js')
const navmenu = require('./modules/navmenu.js')
const search = require('./modules/search.js')


/* loginJsonはデータをJS仕様に変換したもの */
/* もしloginJsonがundefinedではなく、#slideshow(guide.phpのスライドショーに関するID
  )があれば loginJsonを引数にログインモーダルを表示する*/
/* loginJsonがなく、#slideshowがある場合はただのloginModalを呼ぶ */
if (typeof loginJson !== "undefined" && document.querySelector('#slideshow')) {
  console.log(loginJson);

  loginModal(loginJson);
}else if(typeof loginJson == "undefined" && document.querySelector('#slideshow')){
  loginModal();
};



////////


if (typeof parsedJson !== "undefined") {
  console.log(12345);
  setPostData(parsedJson);
}


/* guide page */
if (document.querySelector("#slideshow")) {
  slideshowFnc();
  backTopFnc();
  loginModal();

}

/* タイムライン */
if(document.querySelector('#timeline')){
  　createEvent();
    navmenu();
    search();

};

/* マイページ */
if(document.querySelector('#mypage')){
  　createEvent();
  navmenu();

};

/* イベント詳細ページ */
if(document.querySelector('#detailPage')){
  navmenu();

};

/*  画像は最初の一枚に戻ってから、ループを止めて、htmlとcssで用意したメッセージを表示する。　cssで非表示にしておいて、JSで０（最初の画像）に戻ったらループを止めて、メッセージを表示する。*/
