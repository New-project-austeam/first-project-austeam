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

  console.log("hey12345");
}

module.exports = backTopFnc;

/***/ }),

/***/ "./public/assets/js/modules/loginform.js":
/*!***********************************************!*\
  !*** ./public/assets/js/modules/loginform.js ***!
  \***********************************************/
/***/ (function(module) {

function loginModal() {
  /* ログイン */
  var loginmodal = document.querySelector('.login-show');
  var loginBtn = document.querySelector('#login-test');
  loginBtn.addEventListener('click', loginform);
  var signup = null;
  /* サインアップ */

  var signupBtn = document.querySelector('#signup-test');
  signupBtn.addEventListener('click', signupform);
  /* login modal */

  function loginform() {
    loginmodal.style.opacity = "1";
    var template = '<section class="login-modal">';
    template += '<span class="space">スペース</span>';
    template += '<div class="login-form">';
    template += '<div class="close-modal">';
    template += '<a>×</a>';
    template += '</div>';
    template += '<h3>Log In</h3>';
    template += ' <p>ログイン</p>';
    template += ' <form method="post">';
    template += '  <dl>';
    template += ' <div>';
    template += '  <dt><label for="email">Email</label></dt>';
    template += '  <dd><input type="email" id="email" name="user_email"></dd>';
    template += '  <p style="color:orange;"></p>';
    template += '</div>';
    template += ' <div>';
    template += '   <dt><label for="password">Password</label></dt>';
    template += '<dd><input type="password" id="password" name="user_password"></dd>';
    template += '<p style="color:orange;"></p>';
    template += '   </div>';
    template += ' </dl>';
    template += ' <div>';
    template += '  <button class="login-btn" name="submit_login">Log In</button>';
    template += ' </div>';
    template += '</form>';
    template += '<div><a href="#" class="signup-btn">アカウント登録はこちら</a></div>';
    template += '</div><!--  class="login-form" -->';
    template += '<span class="space">スペース</span>';
    template += '</section>';
    loginmodal.innerHTML = template;
    /* show signupform  */

    signup = document.querySelector('.signup-btn');
    signup.addEventListener('click', signupform);
    /* とりあえず❌クリックしたら消えるようにするーーーー後々、モーダル以外クリックしたら消えるようにする*/

    var closeBtn = document.querySelector('.close-modal');
    closeBtn.addEventListener('click', function () {
      loginmodal.style.opacity = "0";
    });
  }
  /* signup modal */


  function signupform() {
    loginmodal.style.opacity = "1";
    var template1 = '<section class="signup-modal">';
    template1 += '<span class="space">スペース</span>';
    template1 += '<div class="login-form">';
    template1 += '<div class="close-modal">';
    template1 += '<a href="#" class="close-moddal">×</a>';
    template1 += '</div>';
    template1 += '<h3>Sign Up</h3>';
    template1 += '<p>アカウント登録</p>';
    template1 += '<form method="post">';
    template1 += '<dl>';
    1;
    template1 += '<div>';
    template1 += '<dt><label for="nickname">アカウント名</label></dt>';
    template1 += '<dd><input type="text" id="nickname" name="user_nickname" ></dd>';
    template1 += '<p style="color:orange;"></p>';
    template1 += '</div>';
    template1 += '<div>';
    template1 += '<dt><label for="email">Email</label></dt>';
    template1 += '<dd><input type="email" id="email" name="user_email"></dd>';
    template1 += '</div>';
    template1 += '<div>';
    template1 += '<dt><label for="password">Password</label></dt>';
    template1 += '<dd><input type="password" id="password" name="user_password"></dd>';
    template1 += '</div>';
    template1 += '<div>';
    template1 += '<dt><label for="confirm_password">パスワード確認</template +=label></dt>';
    template1 += '<dd><input type="password" id="confirm_password" name="confirm_password"></dd>';
    template1 += '<p style="color:orange;"></p>';
    template1 += '</div>';
    template1 += '</dl>';
    template1 += '<div>';
    template1 += '<button class="login-btn" name="submit_login">Sign Up</button>';
    template1 += '</div>';
    template1 += '</form>';
    template1 += '<div class="login-modal2">';
    template1 += '</div>';
    template1 += '</div><!--  class="login-form" -->';
    template1 += '<span class="space">スペース</span>';
    template1 += '</section><!-- singin-modal -->';
    loginmodal.innerHTML = template1;
    /* とりあえず❌クリックしたら消えるようにするーーーー後々、モーダル以外クリックしたら消えるようにする*/

    var closeBtn = document.querySelector('.close-modal');
    closeBtn.addEventListener('click', function () {
      loginmodal.style.opacity = "0";
    });
  }
}

module.exports = loginModal;

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

module.exports = slideshowFnc; //インポートする時の文言

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
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

var loginModal = __webpack_require__(/*! ./modules/loginform.js */ "./public/assets/js/modules/loginform.js");

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
}();
/******/ })()
;
//# sourceMappingURL=index.js.map