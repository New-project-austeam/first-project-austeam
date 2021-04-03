function navmenu() {

  const headerList = document.querySelector(".header-list2");
  const navBtn = document.querySelector(".navBtn");



  document.addEventListener('DOMContentLoaded',function(){


    navBtn.addEventListener('click',function(){

      navBtn.classList.toggle('active');

      headerList.classList.toggle('active');

    });


  })
}
module.exports = navmenu;
