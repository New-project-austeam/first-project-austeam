/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./public/assets/js/modules/backTop.js":
/*!*********************************************!*\
  !*** ./public/assets/js/modules/backTop.js ***!
  \*********************************************/
/***/ (function(module) {

function backTopFnc() {
  /* トップ戻るボタン　Jquery */
  var backTop = function backTop() {
    if ($(window).scrollTop() >= 150) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  };

  $(window).on('scroll', backTop);
  $('.back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
      scrollTop: 0
    }, 600);
  });
  backTop(); //セクションタイトルもアニメつける
  //コンテンツをフワッと出す
  //ログインとサインアップのモーダル

  /* const loginModal = getElementById('');
  loginModal.addEventListener('click',(){
      $('').fadeIn();
  })
   */

  console.log("hey");
}

module.exports = backTopFnc;

/***/ }),

/***/ "./public/assets/js/modules/setPostData.js":
/*!*************************************************!*\
  !*** ./public/assets/js/modules/setPostData.js ***!
  \*************************************************/
/***/ (function(module) {

function setPostData(parsedJson) {
  if (parsedJson) {
    $("#event_title").val(parsedJson.event_title);
    $("#event_date").val(parsedJson.event_date);
    $("#event_location").val(parsedJson.event_location);
    $("option[value=".concat(parsedJson.event_cateogry, "]")).prop("checked", true);
    $("#event_clothe").val(parsedJson.event_clothe);
    $("#event_equipment").val(parsedJson.event_equipment);
    $("input[value='".concat(parsedJson.event_level, "']")).prop('checked', true);
    $("#event_details").val(parsedJson.event_details);

    if ($('.delete_btn')) {
      $(".e_post_id").attr("value", parsedJson.post_id);
      $('.delete_btn').on('click', function (e) {
        e.preventDefault();
        var answer = confirm("この投稿を削除します。\n 本当によろしいでしょうか？");

        if (answer) {
          $(".e_post_id").attr('name', "d_post_id");
          $('.event-form').prop('action', "/first-project-austeam/mypage/post_edit/");
          $('.event-form').submit();
        }
      });
      $('.event_submit').on('click', function (e) {
        e.preventDefault();
        $('.event-form').prop('action', "/first-project-austeam/mypage/post_edit/");
        $('.event-form').submit();
      });
    }
  }
}

module.exports = setPostData;

/***/ }),

/***/ "./public/assets/js/modules/slideshow.js":
/*!***********************************************!*\
  !*** ./public/assets/js/modules/slideshow.js ***!
  \***********************************************/
/***/ (function(module) {

function slideshowFnc() {
  /* 配列に画像 */
  var setImage = ['./dist/images/sunset-4937813_1920.jpg', './dist/images/beach-4914403_1920.jpg', './dist/images/garbage-3745004_1920.jpg', './dist/images/nature-4202702_1920.jpg', './dist/images/flowers-1190773_1920.jpg'];
  var num = -1;

  function slideimage() {
    if (num === 4) {
      clearInterval(); //jsでfadeOut/Inの時間設定が難しい。。。
      //document.querySelector('.msg-1').style.display='none';
      //document.querySelector('.msg-2').style.display='none';
      //const showMessage = document.getElementById('hidden-message');
      //showMessage.style.display ='block';
      //showMessage.fadeIn('slow');

      $('.msg-1').addClass("hide");
      $('.msg-2').addClass("hide");
      setTimeout(function () {
        $('.msg-1').css({
          display: "none"
        });
        $('.msg-2').css({
          display: "none"
        });
      }, 3000);
      $('.msg-1').addClass('hide');
      $('.msg-2').addClass('hide');
      $('#hidden-message').css({
        display: "block"
      });
      setTimeout(function () {
        $('#hidden-message').addClass('show');
      }, 1000); ////
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

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!***********************************!*\
  !*** ./public/assets/js/index.js ***!
  \***********************************/
console.log("js loaded");

var backTopFnc = __webpack_require__(/*! ./modules/backTop.js */ "./public/assets/js/modules/backTop.js");

var slideshowFnc = __webpack_require__(/*! ./modules/slideshow.js */ "./public/assets/js/modules/slideshow.js");

var setPostData = __webpack_require__(/*! ./modules/setPostData.js */ "./public/assets/js/modules/setPostData.js");

if (typeof parsedJson !== "undefined") {
  setPostData(parsedJson);
}

if (document.querySelector("#slideshow")) {
  slideshowFnc();
  backTopFnc();
}
/*  画像は最初の一枚に戻ってから、ループを止めて、htmlとcssで用意したメッセージを表示する。　cssで非表示にしておいて、JSで０（最初の画像）に戻ったらループを止めて、メッセージを表示する。*/
}();
/******/ })()
;
//# sourceMappingURL=index.js.map