

function loginModal(){
  const loginmodal = document.querySelector('.login-modal');


  　　/* HTMLログインフォーム要素を取得 */

/* const loginmodal2 = document.querySelector('.login-modal2')　（練習）HTMLログインフォームのサインアップ要素を取得 */

  const loginTest = document.querySelector('#login-test');
  loginTest.addEventListener('click',loginform);/* ログイン要素を取得してクリックイベントを実行しloginformファンクションを呼び出す */

 /*  const signupTest = document.querySelector('#signup-test');
  signupTest.addEventListener('click',signupform); */



/* loginform();//⏪完成したら消す */


  let signup = null;　/* 空の値nullを入れておく */
 /* アカウント登録をクリックしたらsignupform関数が呼び出される */


 signup = document.querySelector('.signup-btn');
 signup.addEventListener('click',signupform);

  function loginform(){


    loginmodal.classList.add('show');/* ログインフォームにクラスを付与して表示するようにしてる */

    const closeModal = document.querySelector('.close-modal');
    closeModal.addEventListener('click',function(){
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



  function signupform(){



    let template ='<section class="signup-modal">'
    template += '<span class="space">スペース</span>'
    template +='<div class="login-form">'
    template +='<div class="close-modal">'
     template += '<a href="#" class="close-moddal">×</a>'
     template += '</div>'
      template +='<h3>Sign Up</h3>'
      template += '<p>アカウント登録</p>'
      template += '<form method="post">'
      template += '<dl>'

      template +=　'<div>'
      template += '<dt><label for="nickname">アカウント名</label></dt>'
      template +=  '<dd><input type="text" id="nickname" name="user_nickname" ></dd>'
      template += '<p style="color:orange;"></p>'

      template += '</div>'
      template +=  '<div>'
      template +=   '<dt><label for="email">Email</label></dt>'
      template +=    '<dd><input type="email" id="email" name="user_email"></dd>'
      template +=  '</div>'

      template += '<div>'
          template +=  '<dt><label for="password">Password</label></dt>'
          template +=  '<dd><input type="password" id="password" name="user_password"></dd>'
          template +=  '</div>'

          template +=  '<div>'
          template +=   '<dt><label for="confirm_password">パスワード確認</template +=label></dt>'
          template +=     '<dd><input type="password" id="confirm_password" name="confirm_password"></dd>'
          template +=     '<p style="color:orange;"></p>'
          template +=    '</div>'

          template +=  '</dl>'
          template +=  '<div>'
          template +=    '<button class="login-btn" name="submit_login">Sign Up</button>'
          template +=  '</div>'
          template +=  '</form>'

          template +=   '<div class="login-modal2">'
          template +=    '</div>'
          template +=   '</div><!--  class="login-form" -->'
    template +=  '<span class="space">スペース</span>'
    template += '</section><!-- singin-modal -->'

  loginmodal.innerHTML = template;

  const closeModal = document.querySelector('.close-modal');
  closeModal.addEventListener('click',function(){
    clearInterval();
   loginmodal.classList.remove('show');

/* 再度クリックするとログインフォームじゃなくて、サインアップが出てくる・・・・ */


  });


  }



}





module.exports = loginModal;
