
function createEvent(){
  const createEventBtn = document.querySelector('.createEventBtn');
  const eventModal = document.querySelector('.event-modal');
  const modalbg = document.querySelector('.modal-bg-event');
  const closeModal = document.querySelector('.close-modal');


/* show event-form */
  createEventBtn.addEventListener('click',()=>{

  eventModal.style.display = "block"
    modalbg.style.display = "block"
    　/* アニメ用 */
    setTimeout(function(){
      eventModal.classList.add('active-modal');
    modalbg.classList.add('active-modal');
  },500);

  });


  /* close-modal */
  modalbg.addEventListener('click',()=>{
    eventModal.classList.remove('active-modal');
    modalbg.classList.remove('active-modal');
    /* アニメ用 */
    setTimeout(function(){

      eventModal.style.display = "none"
      modalbg.style.display = "none"
  },1000);

  });

  closeModal.addEventListener('click',()=>{
    eventModal.classList.remove('active-modal');
    modalbg.classList.remove('active-modal');
    /* アニメ用 */
    setTimeout(function(){
      　
      eventModal.style.display = "none"
      modalbg.style.display = "none"
  },1000);
  });



}
module.exports = createEvent;
