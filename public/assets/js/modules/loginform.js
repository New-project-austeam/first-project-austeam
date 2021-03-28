function loginModal() {
  /* ログイン */
  const loginmodal = document.querySelector(".loginmodal");
  const loginBtn = document.querySelector("#login-test");

  loginBtn.addEventListener("click",loginform);

  let signup = null; /* サインアップ */

  const signupBtn = document.querySelector("#signup-test");
  signupBtn.addEventListener("click", signupform);

  /* login modal */
  function loginform() {
   /*  let test2 = "niajfid"
    const test = `
    <div>
      <p>naoko${test2}</p>
    </div>
    `

    document.body.innerHTML = test;
    return; */

    loginmodal.style.visibility = "visible";
    let template = '<section class="login-modal">';

    template += '<div class="login-form">';

    template += '<div class="close-modal">';
    template += "<a>×</a>";
    template += "</div>";
    template += "<h3>Log In</h3>";
    template += " <p>ログイン</p>";
    template += ' <form method="post">';
    template += "  <dl>";
    template += " <div>";
    template += '  <dt><label for="email">Email</label></dt>';
    template += '  <dd><input type="email" id="email" name="user_email"></dd>';
    template += '  <p style="color:orange;"></p>';
    template += "</div>";

    template += " <div>";
    template += '   <dt><label for="password">Password</label></dt>';
    template +=
      '<dd><input type="password" id="password" name="user_password"></dd>';
    template += '<p style="color:orange;"></p>';
    template += "   </div>";
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
    /* template += '<span class="modal-bg"></span>'; */

    loginmodal.innerHTML = template;

    /* show signupform  */
    signup = document.querySelector(".signup-btn");
    signup.addEventListener("click", signupform);

    /* close modal*/
    const closeBtn = document.querySelector(".close-modal");

    closeBtn.addEventListener("click", function () {
      loginmodal.style.visibility = "hidden";

      document.querySelector('.modal-bg').style.display= "none";
      document.querySelector('.modal-bg').classList.remove('active');

      loginmodal.style.display= "none";
      loginmodal.classList.remove('active');

    });

    const closeModal = document.querySelector(".modal-bg");
    closeModal.addEventListener("click", function () {
      document.querySelector('.modal-bg').style.display= "none";
      document.querySelector('.modal-bg').classList.remove('active');

      loginmodal.style.display= "none";
      loginmodal.classList.remove('active');
    });


    //アニメ///////////////////////////////////////////////
    document.querySelector('.modal-bg').style.display="block";
    loginmodal.style.display="block";

    setTimeout(function(){
       document.querySelector('.modal-bg').classList.add('active');
       loginmodal.classList.add('active');


    },1000);


  }

  /* signup modal */ function signupform() {
    loginmodal.style.visibility = "visible";

    let template1 = '<section class="signup-modal">';

    template1 += '<div class="login-form">';
    template1 += '<div class="close-modal">';
    template1 += '<a href="#" class="close-moddal">×</a>';
    template1 += "</div>";
    template1 += "<h3>Sign Up</h3>";
    template1 += "<p>アカウント登録</p>";
    template1 += '<form method="post">';
    template1 += "<dl>";
    1;
    template1 += "<div>";
    template1 += '<dt><label for="nickname">アカウント名</label></dt>';
    template1 +=
      '<dd><input type="text" id="nickname" name="user_nickname" ></dd>';
    template1 += '<p style="color:orange;"></p>';

    template1 += "</div>";
    template1 += "<div>";
    template1 += '<dt><label for="email">Email</label></dt>';
    template1 += '<dd><input type="email" id="email" name="user_email"></dd>';
    template1 += "</div>";

    template1 += "<div>";
    template1 += '<dt><label for="password">Password</label></dt>';
    template1 +=
      '<dd><input type="password" id="password" name="user_password"></dd>';
    template1 += "</div>";

    template1 += "<div>";
    template1 +=
      '<dt><label for="confirm_password">パスワード確認</template +=label></dt>';
    template1 +=
      '<dd><input type="password" id="confirm_password" name="confirm_password"></dd>';
    template1 += '<p style="color:orange;"></p>';
    template1 += "</div>";

    template1 += "</dl>";
    template1 += "<div>";
    template1 +=
      '<button class="login-btn" name="submit_login">Create account</button>';
    template1 += "</div>";
    template1 += "</form>";
    template1+=
    '<div><a href="#" class="signup-btn gotologin">ログインはこちら</a></div>';
    template1 += '<div class="login-modal2">';
    template1 += "</div>";
    template1 += '</div><!--  class="login-form" -->';


    template1 += "</section><!-- singin-modal -->";
    /* template1 += '<span class="modal-bg"></span>'; */

    loginmodal.innerHTML = template1;
　　
    /* to loginform */
    const login = document.querySelector(".gotologin");
    login.addEventListener("click", loginform);

    /* close modal*/

    const closeModal = document.querySelector(".modal-bg");
    closeModal.addEventListener("click", function () {
      loginmodal.style.visibility = "hidden";
    });

    const closeBtn = document.querySelector(".close-modal");

    closeBtn.addEventListener("click", function () {
      loginmodal.style.visibility= "hidden";
    });
  }


}
module.exports = loginModal;
