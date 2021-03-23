
import $ from "jquery";
window.$ = $;
console.log("js loaded")
const backTopFnc = require('./modules/backTop.js');
const slideshowFnc = require('./modules/slideshow.js');
const setPostData = require('./modules/setPostData.js');
const loginModal = require('./modules/loginform.js')

const ajaxTest = require('./modules/ajax_test.js')





if (typeof parsedJson !== "undefined") {
  console.log(12345);
  setPostData(parsedJson);
}


if (document.querySelector("#slideshow")) {
  slideshowFnc();
  backTopFnc();
  loginModal();


}






/*  画像は最初の一枚に戻ってから、ループを止めて、htmlとcssで用意したメッセージを表示する。　cssで非表示にしておいて、JSで０（最初の画像）に戻ったらループを止めて、メッセージを表示する。*/
