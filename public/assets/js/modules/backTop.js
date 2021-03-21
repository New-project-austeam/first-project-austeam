function backTopFnc() {




  /* トップ戻るボタン　Jquery */

  const backTop = () => {
    if ($(window).scrollTop() >= 150) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  };

  $(window).on('scroll', backTop);


  $('.back-to-top').on('click', (e) => {
    e.preventDefault();

    $('html,body').animate({ scrollTop: 0 }, 600);
  });


  backTop();


  //セクションタイトルもアニメつける

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
