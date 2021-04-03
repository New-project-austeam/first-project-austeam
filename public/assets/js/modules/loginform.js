function loginModal(data) {
  /* ログイン */

  //ここで要素を変数に代入
  const loginmodal = document.querySelector(".loginmodal");
  const loginBtn = document.querySelector("#login-test");
  const modal_bg = document.querySelector(".modal-bg");
  const signupBtn = document.querySelector("#signup-test");

  //クリックしたらモーダル表示
  loginBtn.addEventListener("click", loginform);
  signupBtn.addEventListener("click", signupform);

  //サインアップに空の値を代入
  let signup = null; //loginformとsignupform内で使う関数

  //login-modal-animation
  //①モーダルと背景にblock要素を追加する②モーダルと背景は予めopacity:0;が設定されているのでblockが追加されても見えない。③setTimeoutで1秒かけてモーダルと背景に予め用意してあるactiveクラスを付④activeクラスにはopacity:1;が設定され、モーダルと背景はtransition:all 1s easeが設定されているのでゆっくり表示される
  function showModal(bg, modal) {
    bg.style.display = "block";
    modal.style.display = "block";

    setTimeout(function () {
      bg.classList.add("active");
      modal.classList.add("active");
    }, 1000);
  }

  //モーダルの背景.modal-bgをクリックすると、背景とモーダルが消えるように設定してる
  //display:noneとactiveクラスを時間差で取り除き消える時もアニメーションができる
  function closeModal(bg, modal) {
    bg.addEventListener("click", function () {
      setTimeout(function () {
        bg.classList.remove("active");
        modal.classList.remove("active");
      }, 500);

      setTimeout(function () {
        bg.style.display = "none";
        modal.style.display = "none";
      }, 1000);
    });

    //モーダルの❌をクリックするとモーダると背景が消える
    const closeBtn = document.querySelector(".close-modal");

    closeBtn.addEventListener("click", function () {
      setTimeout(function () {
        bg.classList.remove("active");
        modal.classList.remove("active");
      }, 500);

      setTimeout(function () {
        bg.style.display = "none";
        loginmodal.style.display = "none";
      }, 1000);
    });
  }

  // validation

  /* ログインJSONのデータが格納されててHTMLの中に＃slideshowがあったらLOGINmodal（）を呼び出してデータを渡してる。エラーがあったら
  エラーが怒った時。ログインモーダルは表示しておきたい
  postするとリフレッシュされてしまうからモダールが消える
  データという引数をモーダルを渡して
  １、モーダルを消えないする - OK
  ２、エラーメッセージを出す。-OK
  ３、ログイン一つ消す -OK
  ４、サインアップいらない - まだ消してない*/


  /* わからない */
//urlのパスがhttp://localhost:8888/first-project-austeam/の時loignJsonのデータ使えず、一部のバリデーションが機能しない・どうする？
//urlパスがhttp://localhost:8888/first-project-austeam/users/loginの時、①以前より登録指定たアドレスでログインできない。②新規でアカウント登録できない


/*
 console.log(loginJson.user_email);
 console.log(loginJson.user_password); */



  // login validation
  function loginValidation(data){
    const form = document.querySelector(".form");
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");

    const emailError = document.querySelector(".email-error");
    const passwordError = document.querySelector(".password-error");


    form.addEventListener("submit", (e) => {
      let errorMessages = [];
      let errorMessages2 = [];

      /* email error */
      if (email.value == "" || email.value == null) {
        errorMessages.push(
          '<i class="fas fa-exclamation-triangle"></i>　Enter your e-mail'
        );
      }else if (email.value !== data.user_email) {
        errorMessages.push(
          '<i class="fas fa-exclamation-triangle"></i>　E-mail is not registered. please sign up'
        );
      };

       /* password error */

      if (password.value == "" || password.value == null) {
        errorMessages2.push(
          '<i class="fas fa-exclamation-triangle"></i>　Enter your password'
        );
      }
      /* 🌟既存のパスワードと一致しない場合 */
      else if (password.value !== data.user_password) {
        errorMessages2.push(
          '<i class="fas fa-exclamation-triangle"></i>　Password is incorrect'
        );
      }

      /*errorを表示  */
      if (errorMessages.length > 0 || errorMessages2.length > 0){
        e.preventDefault();
        emailError.innerHTML = errorMessages.join(','); /* join(',')配列に入れて繋げることも可能 */
        passwordError.innerHTML = errorMessages2.join(',');

      }

    });

  }


 //signup validation
  function signupValidation(data) {
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");
    const passwordConfirmation = document.querySelector("#confirm_password");
    const form = document.querySelector(".form");
    const emailError = document.querySelector(".email-error");
    const passwordError = document.querySelector(".password-error");
    const nicknName = document.querySelector("#nickname");
    const nicknameError = document.querySelector(".nickname-error");
    const passwordConfirtmError = document.querySelector(".password-confirm-error");

    form.addEventListener("submit", (e) => {
      let errorMessages = [];
      let errorMessages2 = [];
      let errorMessages3 =[];
      let errorMessages4 =[];
      /* email error */
       /* 🌟you already has an account  */
      if (email.value == "" || email.value == null) {
        errorMessages.push(
          '<i class="fas fa-exclamation-triangle"></i>　Enter your e-mail'
        );
      } else if(email.value === data.user_email){
        errorMessages.push(
          '<i class="fas fa-exclamation-triangle"></i> You already have an account, please login'
        );
      }

      /* password error */
      if (password.value.length <= 6) {
        errorMessages2.push(
          '<i class="fas fa-exclamation-triangle"></i>　Password must be more than 6 charactor'
        );
      }


      /* signup nick name error */
       if(nicknName.value == "" || nicknName.value == null){
        errorMessages3.push(
          '<i class="fas fa-exclamation-triangle"></i>　Enter your nickname'
        );
       }

       /* password confirmation error */
       if(passwordConfirmation.value !== password.value){
         e.preventDefault();
        errorMessages4.push(
          '<i class="fas fa-exclamation-triangle"></i>　password doesn`t much'
        );
       }
      /*errorを表示  */
      if (errorMessages.length > 0 || errorMessages2.length > 0){
        e.preventDefault();
      emailError.innerHTML = errorMessages.join(','); /* join(',')配列に入れて繋げることも可能 */
      passwordError.innerHTML = errorMessages2.join(',');
      nicknameError.innerHTML = errorMessages3.join(',');
      passwordConfirtmError.innerHTML = errorMessages4.join(',');
      } else{

       /*users.phpより */
        /* $lastInsertedId = $this->userModel->register($data);
        if ($lastInsertedId) {
          $this->make_user_image_dir($lastInsertedId);

          flash('register_success', 'You are successfully registered!! Please login with  the your account ');
          redirect('users/login');
        } else {
          die('Something went wrong');
        } */


      }

    }
    );
  }


  ///////////////////////login modal
  function loginform() {

    let template = '<section class="login-modal">';

    template += '<div class="login-form">';

    template += '<div class="close-modal">';
    template += "<a>×</a>";
    template += "</div>";
    template += "<h3>Log In</h3>";
    template += " <p>ログイン</p>";
    /* form */
    template +=
      ' <form class="form" method="post" action="http://localhost:8888/first-project-austeam/users/login">';
    template += "  <dl>";
    /* email */
    template += " <div>";
    template += '  <dt><label for="email">Email</label></dt>';
    template += '  <dd><input type="email" id="email" name="user_email"></dd>';

    template += "</div>";
    /* email error message*/
    template += '  <p class="email-error"></p>';
    /* password */
    template += " <div>";
    template += '   <dt><label for="password">Password</label></dt>';
    template +=
      '<dd><input type="password" id="password" name="user_password"></dd>';
    template += "   </div>";
    /* error-msg2 */
    template += '<p class="password-error"></p>';

    template += " </dl>";
    template += " <div>";
    template +=
      '  <button class="login-btn" name="submit_login">Log In</button>';
    template += " </div>";
    template += "</form>";

    template +=
      '<div><a href="#" class="signup-btn">アカウント登録はこちら</a></div>';
    template += '</div><!--  class="login-form" -->';

    template += "</section>";

    loginmodal.innerHTML = template;

    /*  もっと簡単な書き方　テンプレート``を使う↓↓
   　let test2 = "niajfid"
    const test = `
    <div>
      <p>naoko${test2}</p>
    </div>｀
    document.body.innerHTML = test;
    */

    /* show signupform  */
    signup = document.querySelector(".signup-btn");
    signup.addEventListener("click", signupform); /* モーダルをアニメで表示 */

    showModal(modal_bg, loginmodal);

    /* モーダルをアニメで消す */
    closeModal(modal_bg, loginmodal);

    /* validation */
    loginValidation(loginJson);


  } //////////////////////signup modal

  function signupform() {
    let template1 = '<section class="signup-modal">';

    template1 += '<div class="login-form">';
    template1 += '<div class="close-modal">';
    template1 += '<a href="#" class="close-moddal">×</a>';
    template1 += "</div>";
    template1 += "<h3>Sign Up</h3>";
    template1 += "<p>アカウント登録</p>";
    /* form */
    template1 += '<form class="form" method="post" action="http://localhost:8888/first-project-austeam/users/login">';
    template1 += "<dl>";
    1;
    template1 += "<div>";
    template1 += '<dt><label for="nickname">アカウント名</label></dt>';
    /* nickname */
    template1 +=
      '<dd><input type="text" id="nickname" name="user_nickname"></dd>';
    template1 += "</div>";
    /* Nickname error message */
    template1 += '<p class="nickname-error"></p>';
    template1 += "<div>";
    /* email */
    template1 += '<dt><label for="email">Email</label></dt>';
    template1 += '<dd><input type="email" id="email" name="user_email"></dd>';
    template1 += "</div>";
    /* email error message */
    template1 += '  <p class="email-error"></p>';

    /* password */
    template1 += "<div>";
    template1 += '<dt><label for="password">Password</label></dt>';
    template1 +=
      '<dd><input type="password" id="password" name="user_password"></dd>';
    template1 += "</div>";
    /* password error message */
    template1 += '<p class="password-error"></p>';
    template1 += "<div>";
    template1 +=
      '<dt><label for="confirm_password">パスワード確認</template +=label></dt>';
    template1 +=
      '<dd><input type="password" id="confirm_password" name="confirm_password"></dd>';

    template1 += "</div>";
    /* password confirmation error */
    template1 += '<p class="password-confirm-error"></p>';

    template1 += "</dl>";
    template1 += "<div>";
    template1 +=
      '<button class="login-btn" name="submit_signup">Create account</button>';
    template1 += "</div>";
    template1 += "</form>";
    template1 +=
      '<div><a href="#" class="signup-btn gotologin">ログインはこちら</a></div>';
    template1 += '<div class="login-modal2">';
    template1 += "</div>";
    template1 += '</div><!--  class="login-form" -->';

    template1 += "</section><!-- singin-modal -->";

    loginmodal.innerHTML = template1;
    /* to loginform */
    const login = document.querySelector(".gotologin");
    login.addEventListener("click", loginform);

    /// モーダル表示
    showModal(modal_bg, loginmodal); ///モダール消す
    closeModal(modal_bg, loginmodal);

    //  validation

    /* const submitBtn = document.querySelector('.login-btn'); */



    /* validation */
    signupValidation(loginJson);

  }

}
module.exports = loginModal;
