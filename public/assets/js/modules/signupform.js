function signupModal(){
  const signupmodal2 = document.querySelector('.signup-modal2');

  const signupTest = document.querySelector('#signup-test');
  signupTest .addEventListener('click',signupform2);

  function signupform2 (){
    signupmodal2.classList.add('active');

    document.querySelector('.close-modal3').addEventListener('click',function(){
      signupmodal2.classList.remove('active');
    })
  }


}
module.exports = signupModal;
