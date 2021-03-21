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
  var loginmodal = document.querySelector('.login-modal');
  /* HTMLログインフォーム要素を取得 */

  /* const loginmodal2 = document.querySelector('.login-modal2')　（練習）HTMLログインフォームのサインアップ要素を取得 */

  var loginTest = document.querySelector('#login-test');
  loginTest.addEventListener('click', loginform);
  /* ログイン要素を取得してクリックイベントを実行しloginformファンクションを呼び出す */

  /*  const signupTest = document.querySelector('#signup-test');
   signupTest.addEventListener('click',signupform); */

  /* loginform();//⏪完成したら消す */

  var signup = null;
  /* 空の値nullを入れておく */

  /* アカウント登録をクリックしたらsignupform関数が呼び出される */

  signup = document.querySelector('.signup-btn');
  signup.addEventListener('click', signupform);

  function loginform() {
    loginmodal.classList.add('show');
    /* ログインフォームにクラスを付与して表示するようにしてる */

    var closeModal = document.querySelector('.close-modal');
    closeModal.addEventListener('click', function () {
      loginmodal.classList.remove('show');
    });
    /* loginmodal2.classList.add('show-loginmodal'); sign upにクラス付与して下記のinnerHTMLで、定義してtemplateに書き換えてる（練習） */

    /* こういう記述でも可能　↓　↓　↓let template = '<h1>Log In</h1>'
    template += '<p>ログイン</p>'
    template += ''
    template += '<button class="submit-btn">ログイン</button>'
    template += '</div>'
    　template += '<a href="#" class="signup-btn">アカウント登録はこちら</a>'
    loginmodal2.innerHTML = template; */

    /*
       上記のようにinnerHTMLで書き換える場合は上のHTMLフォームを表示する関数のなかに以下を記述しないと、クリックイベントで表示するようにしている場合はこのように描かないと実行できない　※なぜならsignup要素がこの関数外には存在していないから、文字列は表示されててもクリックしないと遷移できない。
      signup = document.querySelector('.signup-btn');
      signup.addEventListener('click',signupform);
      */

    /* アカウント登録をクリックしたらsignupform関数が呼び出される */

    /* signup = document.querySelector('.signup-btn');
    signup.addEventListener('click',signupform); */
  }

  function signupform() {
    var template = '<section class="signup-modal">';
    template += '<span class="space">スペース</span>';
    template += '<div class="login-form">';
    template += '<div class="close-modal">';
    template += '<a href="#" class="close-moddal">×</a>';
    template += '</div>';
    template += '<h3>Sign Up</h3>';
    template += '<p>アカウント登録</p>';
    template += '<form method="post">';
    template += '<dl>';
    template += '<div>';
    template += '<dt><label for="nickname">アカウント名</label></dt>';
    template += '<dd><input type="text" id="nickname" name="user_nickname" ></dd>';
    template += '<p style="color:orange;"></p>';
    template += '</div>';
    template += '<div>';
    template += '<dt><label for="email">Email</label></dt>';
    template += '<dd><input type="email" id="email" name="user_email"></dd>';
    template += '</div>';
    template += '<div>';
    template += '<dt><label for="password">Password</label></dt>';
    template += '<dd><input type="password" id="password" name="user_password"></dd>';
    template += '</div>';
    template += '<div>';
    template += '<dt><label for="confirm_password">パスワード確認</template +=label></dt>';
    template += '<dd><input type="password" id="confirm_password" name="confirm_password"></dd>';
    template += '<p style="color:orange;"></p>';
    template += '</div>';
    template += '</dl>';
    template += '<div>';
    template += '<button class="login-btn" name="submit_login">Sign Up</button>';
    template += '</div>';
    template += '</form>';
    template += '<div class="login-modal2">';
    template += '</div>';
    template += '</div><!--  class="login-form" -->';
    template += '<span class="space">スペース</span>';
    template += '</section><!-- singin-modal -->';
    loginmodal.innerHTML = template;
    var closeModal = document.querySelector('.close-modal');
    closeModal.addEventListener('click', function () {
      clearInterval();
      loginmodal.classList.remove('show');
      /* 再度クリックするとログインフォームじゃなくて、サインアップが出てくる・・・・ */
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

/***/ "./public/assets/js/modules/signupform.js":
/*!************************************************!*\
  !*** ./public/assets/js/modules/signupform.js ***!
  \************************************************/
/***/ (function(module) {

function signupModal() {
  var signupmodal2 = document.querySelector('.signup-modal2');
  var signupTest = document.querySelector('#signup-test');
  signupTest.addEventListener('click', signupform2);

  function signupform2() {
    signupmodal2.classList.add('active');
    document.querySelector('.close-modal3').addEventListener('click', function () {
      signupmodal2.classList.remove('active');
    });
  }
}

module.exports = signupModal;

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

var signupModal = __webpack_require__(/*! ./modules/signupform.js */ "./public/assets/js/modules/signupform.js");

if (typeof parsedJson !== "undefined") {
  console.log(12345);
  setPostData(parsedJson);
}

if (document.querySelector("#slideshow")) {
  slideshowFnc();
  backTopFnc();
  loginModal();
  signupModal();
}
/*  画像は最初の一枚に戻ってから、ループを止めて、htmlとcssで用意したメッセージを表示する。　cssで非表示にしておいて、JSで０（最初の画像）に戻ったらループを止めて、メッセージを表示する。*/
}();
/******/ })()
;
//# sourceMappingURL=index.js.map